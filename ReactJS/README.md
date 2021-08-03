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

```js
function Car(props) {
  return <h2>Hi {props.name}, I am also a Car!</h2>;
}
```

Working of Functional Components:  `props  ------>  ||FUNCTIONAL COMPONENT||  ---return--->  ||React Element / JSX||`

Cons of Functional  Components :   
* No Side effects
* No state

---

## Class Component

Working of Class Components:  `||CLASS COMPONENT||  ---react creates--->  ||INSTANCE||  ---render()--->  ||React Element / JSX||`

Life Cycle of Class Components:
```
  |
  |--->  Mounting
  |      |
  |      |--->  constructor()  --->  static getDrivedStateFromProps()  --->  render() --->  comnonentDidMount()
  |
  |--->  Updating
  |      |
  |      |--->  static getDrivedStateFromProps()  --->  shouldComponentUpdate()  --->  render() --->  getSnapshotBeforeUpdate()  --->  componentDidUpdate()
  |
  |--->  Unmounting
  |      |
  |      |--->  componentWillUnmount()
  |
  |--->Error Handling
         |
         |---> static getDerivedStateFromError()  --->  componentDidCatch()
```

```js
 class ComponentName extends React.Component {       //The component's name must start with an upper case letter nd must extends React.Component.
    
    //***************render method
    //The component requires a render() method, this method returns HTML.
    render() { 
      return <h2>Hello World</h2>;
    };
    
    //***************Component Constructor
    //The constructor function is where you initiate the component's properties.
    //In React, component properties should be kept in an object called state.
    constructor() {
      super();
      this.state = {color: "red"};
    };
    
    //**************Components in Components
    //We can refer to components inside other components, like : creating object of some other class. 
    //ex: <Vehicle/> 
  }
```

---

## Props

* Props are arguments passed into React components.
* Props are passed to components via HTML attributes.
* React Props are like function arguments in JavaScript and attributes in HTML.
* props are immutable (it cant be change)
* `props.children` : gives the inner html of component.
  
  
```
<Car brand="Ford" />
```
  here,
  * Car is Component Name
  * Brand is a HTML attribute, this will pass to the component as props name
  * Ford is props value 
  * In Component Class this will access like: `this.props.brand;`

---

## State

* React components has a built-in state object.
* States are like Varibles declared in the function body.
* The state object is where you store property values that belongs to the component.
* When the state object changes, the component re-renders.
* The state object is initialized in the constructor

<br>

* Using the state Object : this.state.propertyname

<br>

* `setState(stateObject, callBackFunction)`
Changing the state Object : `this.setState()`
  * Dont change the state object directly, always use setState method to change an state value.
  * If you change state object directly, react will not render the component and u will not see any changes in ui.
 
<br>

* Callback Function: If u want to execute some code after the state change then write the code into call back function.
  ```js
  this.setState({
    A:this.state.A+1
  }, ()=>{
    console.log(this.state.A);
  });
  ``` 

<br>

* When you ahve to update state based on the previous state value, pass in a function as an argument insted of the regular object.

---

## Conditional Rendering

1. if-else Statement: cant write if-else inside jsx, u can put if-else in render method and return inside if else condition.
2. Element Variables
3. Ternary conditional operator (?:)
4. Short circuit operator (&&)

---

## List Rendering

Using map method

<br>

When to use Index as a key?
* The items in your list do not have a unique id.
* The list is a static and will not change.
* The list will never be ordered or filtered.

---

## Styling React Components
1. CSS StyleSheets
2. Inline Styling
3. CSS Modules
4. CSS in JS Libraries

---

## Fragments

A common pattern in React is for a component to return multiple elements. Fragments let you group a list of children without adding extra nodes to the DOM.

```html
  <React.Fragment>
    <p></p>
    <p></p>
  </React.Fragment>
```

You can use <></> the same way you’d use any other element except that it doesn’t support keys or attributes.

---

## Pure Components

If the previous value of state or props and the new value of state or props is the same, the component will not re-render itself. Since Pure Components restricts the re-rendering when there is no use of re-rendering of the component. Pure Components are Class Components which extends React.PureComponent.

## memo

React.memo is a higher order component. If your component renders the same result given the same props, you can wrap it in a call to React.memo for a performance boost in some cases by memoizing the result. This means that React will skip rendering the component, and reuse the last rendered result.

---

## Refs

Refs provide a way to access DOM nodes or React elements created in the render method.

Creating Refs:
```js
  class MyComponent extends React.Component {
    constructor(props) {
      super(props);
      this.myRef = React.createRef();
    }
    render() {
      return <div ref={this.myRef} />;
    }
  }
```

Accessing Refs: `const node = this.myRef.current;`

---

## Portals

Portals provide a first-class way to render children into a DOM node that exists outside the DOM hierarchy of the parent component.

`ReactDOM.createPortal(child, container)`
* The first argument (child) is any renderable React child, such as an element, string, or fragment. 
* The second argument (container) is a DOM element.

```js
render() {
  // React does *not* create a new div. It renders the children into `domNode`.
  // `domNode` is any valid DOM node, regardless of its location in the DOM.
  return ReactDOM.createPortal(
    this.props.children,
    domNode
  );
}
```

---

## Error Boundaries

* Error boundaries are React components that catch JavaScript errors anywhere in their child component tree, log those errors, and display a fallback UI instead of the component tree that crashed. Error boundaries catch errors during rendering, in lifecycle methods, and in constructors of the whole tree below them.
* A class component becomes an error boundary if it defines either (or both) of the lifecycle methods static getDerivedStateFromError() or componentDidCatch().
  * Use static getDerivedStateFromError() to render a fallback UI after an error has been thrown.
  * Use componentDidCatch() to log error information.

```js
class ErrorBoundary extends React.Component {
  constructor(props) {
    super(props);
    this.state = { hasError: false };
  }

  static getDerivedStateFromError(error) {
    // Update state so the next render will show the fallback UI.
    return { hasError: true };
  }

  componentDidCatch(error, errorInfo) {
    // You can also log the error to an error reporting service
    logErrorToMyService(error, errorInfo);
  }

  render() {
    if (this.state.hasError) {
      // You can render any custom fallback UI
      return <h1>Something went wrong.</h1>;
    }

    return this.props.children; 
  }
}
```

```html
<ErrorBoundary>
  <MyWidget />
</ErrorBoundary>
```
