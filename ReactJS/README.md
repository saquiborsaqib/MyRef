# ReactJS

* A JavaScript Library for building user interfaces.
* React is used to build single page applications.
* React allows us to create reusable UI components.
* React is a JavaScript library created by Facebook.

### React Work

React creates a VIRTUAL DOM in memory - Instead of manipulating the browser's DOM directly, React creates a virtual DOM in memory, where it does all the necessary manipulating, before making the changes in the browser DOM.<br>

React only changes what needs to be changed!
  
### Start

* ##### React Directly in HTML
  By Include three CDN's in your HTML file.<br>
  
  This way of using React can be OK for testing purposes, but for production you will need to set up a React environment.
  
* ##### Setting up a React Environment
  * Install create-react-app : npm install -g create-react-app
  * Create a React application : npx create-react-app myfirstreact
  * Run the React Application : move to your application directory > npm start

---

## JSX JavaScript XML

* Extention to the JavaScript Language syntax.
* Write XML-like code for elements and components.
* JSX tags have name, attributes, and chuldren.
* JSX is not a necessity to write React applications.
* JSX makes your react code simpler and elegant.
* JSX ultimately transpiles to pure JavaScript which is understood by the browsers.

---

## React Components

* Hearts of all react app are component - A piece of the UI
* Components are like functions that return HTML elements.
* Components are independent and reusable bits of code. They serve the same purpose as JavaScript functions, but work in isolation and return HTML via a render() function.
* Components come in two types: 
    * Class components
    * Function components

---

## Function Component

A Function component also returns HTML, and behaves pretty much the same way as a Class component, but Class components have some additions

```
function Car(props) {
  return <h2>Hi {props.name}, I am also a Car!</h2>;
}
```

Working of Functional Components:
  props  -->  FUNCTIONAL COMPONENT  --return-->  React Element / JSX
