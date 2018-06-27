<?php

namespace Webdevvie\Epp;

use Webdevvie\Epp\Exception\ConnectionException;

/**
 * Class RawEppConnection
 * @package Webdevvie\Epp
 */
class RawEppConnection
{
    /**
     * @var null|string
     */
    protected $sslLocalCert = null;

    /**
     * @var null|string
     */
    protected $sslLocalCertPwd = null;

    /**
     * @var null|boolean
     */
    protected $sslAllowSelfSigned = null;

    /**
     * @var null|boolean
     */
    protected $sslVerifyPeer = null;

    /**
     * @var null|boolean
     */
    protected $sslVerifyPeerName = null;

    /**
     * @var resource
     */
    private $connection;

    /**
     * @var boolean
     */
    private $connected = false;

    /**
     * @var integer
     */
    private $timeout;

    /**
     * @var string
     */
    private $serverAddress;

    /**
     * @var integer
     */
    private $port;

    /**
     * RawTcpConnection constructor.
     * @param string  $serverAddress
     * @param integer $port
     * @param integer $timeout
     */
    public function __construct($serverAddress, $port, $timeout)
    {
        $this->serverAddress = $serverAddress;
        $this->timeout = $timeout;
        $this->port = $port;
    }

    /**
     * @param string      $certLocatiom
     * @param null|string $pwd
     * @return void
     */
    public function setLocalCert($certLocatiom, $pwd = null)
    {
        $this->sslLocalCert = $certLocatiom;
        $this->sslLocalCertPwd = $pwd;
    }

    /**
     * @return boolean|null
     */
    public function getSslAllowSelfSigned()
    {
        return $this->sslAllowSelfSigned;
    }

    /**
     * @param boolean|null $sslAllowSelfSigned
     * @return RawEppConnection
     */
    public function setSslAllowSelfSigned($sslAllowSelfSigned)
    {
        $this->sslAllowSelfSigned = $sslAllowSelfSigned;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSslVerifyPeer()
    {
        return $this->sslVerifyPeer;
    }

    /**
     * @param boolean|null $sslVerifyPeer
     * @return RawEppConnection
     */
    public function setSslVerifyPeer($sslVerifyPeer)
    {
        $this->sslVerifyPeer = $sslVerifyPeer;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSslVerifyPeerName()
    {
        return $this->sslVerifyPeerName;
    }

    /**
     * @param boolean|null $sslVerifyPeerName
     * @return RawEppConnection
     */
    public function setSslVerifyPeerName($sslVerifyPeerName)
    {
        $this->sslVerifyPeerName = $sslVerifyPeerName;
        return $this;
    }

    /**
     * @param string  $data
     * @param integer $timeout
     * @return string|boolean
     * @throws ConnectionException
     */
    public function writeAndWaitForResponse($data, $timeout = 10)
    {
        $this->write($data);
        return $this->read(false, $timeout);
    }

    /**
     * @param string $data
     * @return integer bytes written
     * @throws ConnectionException
     */
    public function write($data)
    {
        if (!$this->connected) {
            throw new ConnectionException('Not connected to epp', 1);
        }
        if (!is_string($data)) {
            return 0;
        }
        $this->waitingForMessage = true;
        return fwrite($this->connection, $this->addInteger($data));
    }

    /**
     * This will read 1 response from the connection if there is one
     * @param boolean $nonBlocking prevents blocking of the thread. if no content is there it returns false
     * @param integer $timeout
     * @return string
     */
    public function read($nonBlocking = false, $timeout = 10)
    {
        $content = '';
        $time = time() + $timeout;
        $read = "";
        while ((!isset($length)) || ($length > 0)) {
            if (feof($this->connection)) {
                $this->connected = false;
            }
            //Check if timeout occured
            if (time() >= $time) {
                return false;
            }
            //If we dont know how much to read we read the first few bytes first, these contain the content-length
            //of whats to come
            if ((!isset($length)) || ($length == 0)) {
                $readLength = 4;
                //$readbuffer = "";
                $read = "";
                while ($readLength > 0) {
                    if ($readbuffer = fread($this->connection, $readLength)) {
                        $readLength = $readLength - strlen($readbuffer);
                        $read .= $readbuffer;
                        $time = time() + $timeout;
                    }
                    //Check if timeout occured
                    if (time() >= $time) {
                        return false;
                    }
                }
                $length = $this->readInteger($read) - 4;
            }
            if ($length > 1000000) {
                $this->connected = false;
                $this->disconnect();
                return false;
            }
            //We know the length of what to read, so lets read the stuff
            if ((isset($length)) && ($length > 0)) {
                $time = time() + $timeout;
                if ($read = fread($this->connection, $length)) {
                    $length = $length - strlen($read);
                    $content .= $read;
                    $time = time() + $timeout;
                }
                if (strpos($content, 'Session limit exceeded') > 0) {
                    $read = fread($this->connection, 4);
                    $content .= $read;
                }
            }
            if ($nonBlocking && strlen($content) < 1) {
                //there is no content don't keep waiting
                break;
            }
            if (!strlen($read)) {
                usleep(100);
            }
        }
        $this->waitingForMessage = false;
        return $content;
    }

    /**
     * @param integer|null $timeout
     * @throws ConnectionException
     * @return void
     */
    public function connectToServer($timeout = null)
    {
        if (is_null($timeout) || !is_integer($timeout)) {
            $timeout = $this->timeout;
        }
        try {
            $context = stream_context_create();
            $target = $this->serverAddress . ":" . $this->port;
            if (!is_null($this->sslLocalCert)) {
                stream_context_set_option($context, 'ssl', 'local_cert', $this->sslLocalCert);
            }
            if (!is_null($this->sslLocalCertPwd)) {
                stream_context_set_option($context, 'ssl', 'passphrase', $this->sslLocalCertPwd);
            }
            if (!is_null($this->sslAllowSelfSigned)) {
                stream_context_set_option($context, 'ssl', 'allow_self_signed', $this->sslAllowSelfSigned);
            }
            if (!is_null($this->sslVerifyPeer)) {
                stream_context_set_option($context, 'ssl', 'verify_peer', $this->sslVerifyPeer);
            }
            if (!is_null($this->sslVerifyPeerName)) {
                stream_context_set_option($context, 'ssl', 'verify_peer_name', $this->sslVerifyPeerName);
            }
            try {
                $errno = '';
                $errstr = '';
                $this->connection = @stream_socket_client(
                    $target,
                    $errno,
                    $errstr,
                    $timeout,
                    STREAM_CLIENT_CONNECT,
                    $context
                );
            } catch (\Exception $exception) {
                throw new ConnectionException($exception->getMessage(), $exception->getCode());
            }
            if (!is_resource($this->connection)) {
                throw new ConnectionException('Could not connnect to epp server', 1);
            }
            stream_set_blocking($this->connection, false);
            stream_set_timeout($this->connection, $this->timeout);
        } catch (\Exception $exception) {
            throw new ConnectionException($exception->getMessage(), $exception->getCode());
        }
        if ($errno == 0) {
            $this->connected = true;
        } else {
            throw new ConnectionException($errstr, $errno);
        }
    }

    /**
     * @return void
     */
    public function disconnect()
    {
        if (!is_resource($this->connection) && feof($this->connection)) {
            $this->connected = false;
            return;
        }
        if (is_resource($this->connection)) {
            fclose($this->connection);
        }
        $this->connected = false;
    }

    /**
     * @return boolean
     */
    public function isConnected()
    {
        return $this->connected;
    }

    /**
     * This parses the first 4 bytes of the content into an integer for content length check
     *
     * @param string $content
     * @return integer
     */
    protected function readInteger($content)
    {
        $int = unpack('N', substr($content, 0, 4));
        return $int[1];
    }

    /**
     * This adds the content-length to the content
     *
     * @param string $content
     * @return string
     */
    protected function addInteger($content)
    {
        $int = pack('N', intval(strlen($content) + 4));
        return $int . $content;
    }
}
