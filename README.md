webdevvie/epp
=============

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

Goal: Fully unit tested EPP client
----------------------------------
A client that can be fully unit tested.  

Goal: Serialisations fully tested against epp XSDs
--------------------------------------------------
To prevent issues with regressions or bugs popping up after someone contributes a set of tests is run to check against 

Goal: provide these extra features
----------------------------------
- TODO : add these 🤔


Why
---
Why build another EPP library? I wanted to create something neat and clean for the future but that supports 


Acknowledgements
----------------
The messages are an amalgamation of serialisation objects I've built in the past. These are based on the original work I did for this epp client when I first conceived it.
They were reworked for use with other projects at my current employer Metaregistrar B.V. and then reworked/cleaned up for use within this project. 


Author
------
If you like this library. Find me on twitter [@webdevvie](https://twitter.com/webdevvie) or my personal site [johnbakker.name](https://www.johnbakker.name) and say hello            
