<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;

/**
 * Class Hosts
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class Approver
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $email;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("saEmail")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $saEmail;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("phone")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $phone;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("firstName")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $firstName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("lastName")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $lastName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("company")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $company;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("department")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $department;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("companyRegistration")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $companyRegistration;
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("street")
     * @XmlList(inline = true, entry = "street",namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     * @Expose
     */
    protected $street = [];

    /**
     * @var string
     * @Type("string")
     * @SerializedName("postalCode")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $postalCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("city")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $city;


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Approver
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaEmail()
    {
        return $this->saEmail;
    }

    /**
     * @param string $saEmail
     * @return Approver
     */
    public function setSaEmail($saEmail)
    {
        $this->saEmail = $saEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Approver
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Approver
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Approver
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Approver
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return Approver
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyRegistration()
    {
        return $this->companyRegistration;
    }

    /**
     * @param string $companyRegistration
     * @return Approver
     */
    public function setCompanyRegistration($companyRegistration)
    {
        $this->companyRegistration = $companyRegistration;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string[] $street
     * @return Approver
     */
    public function setStreet(array $street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Approver
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Approver
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}
