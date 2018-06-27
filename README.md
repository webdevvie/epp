webdevvie/epp
=============
[![Build Status](https://travis-ci.org/webdevvie/epp.svg?branch=master)](https://travis-ci.org/webdevvie/epp)


An extendable PHP EPP library. 

Written from scratch to be extendable. 
Uses JMSSerializer to serialize and deserialize the xml messages

You can use this project as a basis for your own connection.

**_Do not use for production at the moment. This is very much work in progress._**



Goals
=====
What follows is a list of goals this library intends to meet.

Goal: provide a simple epp client for basic interactions 
--------------------------------------------------------
Instead of having to build the messages yourself you can use the simple commands and simple responses to handle the requests and responses.

Goal: provide a stable and clean client that is easy to extend   
--------------------------------------------------------------
That translates objects epp messages and back. Without namespace collisions.

Goal: Fully unit tested basic epp client
----------------------------------------
A client that can be fully unit tested. With exception of the RawEppConnection class.
The RawEppConnection handles the actual connection setup. 

Goal: Translations fully tested against basic epp XSDs
------------------------------------------------------
To prevent issues with regressions or bugs popping up after someone contributes a set of tests is run to check against 

Goal: provide these features
----------------------------


Those with ✔️ have been done.

- Connectivity to a basic epp server ✔️
- Queueing messages with callbacks 
- Async request support
- Support basic messages
    - hello ✔️
    - greeting ✔️
- Support basic commands (and corresponding resData) 
    - Login ✔️
    - Logout ✔️
    - Check ✔️
    - Create
    - Update
    - Delete
    - Info
    - Renew
    - Transfer  
    
- Support the basic commands/responses for the following objects
    - Domain
        - Check✔️
        - Create
        - Delete
        - Info
        - Transfer
        - Renew
        - Update
    - Contact
        - Check
        - Create
        - Delete
        - Info
        - Transfer
    - Host
        - Check
        - Create
        - Delete
        - Info


Why
---
Why build another EPP library? I wanted to create something neat and clean for the future. 


Author
------
If you like this library. Find me on twitter [@webdevvie](https://twitter.com/webdevvie) or my personal site [johnbakker.name](https://www.johnbakker.name) and say hello            