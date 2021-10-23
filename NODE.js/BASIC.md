## What is NODE.JS?

* JavaScript Runtime (NOT a Language or a framework)
* Built on the V8 JavaScript engine (Same a Google Chrome)
* Written in C++
* Esssentially allow us to run JavaScript Code on the server.

## Why use NODE.JS

* Node.js uses asynchronous programming!
* Fast, efficient and Highly scalable.
* Event Driven, Non-blocking I/O model.
* Popular in the Industry
* Same language on the front and back end (JS)

## Installing NODE.JS

``` sudo apt install node ```

## Running NODE Program

``` node file-name.js ```

## Node Module System

* Every file in the node is considered a module, They are private, the functions and the varibles defined in that module is scope to that module.
* Every node application should have main module.

* ### Exporting Members of Module 

  ```js  module.exports.member = member;```
  
* ### Loading a Module

  ```js require(); ```
