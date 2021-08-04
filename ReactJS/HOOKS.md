## Hooks

* Hooks are a new addition in React 16.8. 
* They let you use state and other React features without writing a class.
* Avoid the whole confusion with 'this' keyword.
* Allow you to reuse stateful logic.
* Organize the logic inside a component into reuseable isolated units.
* Hooks are backwards-compatible. 
  
Hooks are functions that let you “hook into” React state and lifecycle features from function components. Hooks don’t work inside classes — they let you use React without classes. 

React provides a few built-in Hooks like useState. You can also create your own Hooks to reuse stateful behavior between different components. 

#### Rules of Hooks
Hooks are JavaScript functions, but they impose two additional rules:
1. Only call Hooks at the top level. Don’t call Hooks inside loops, conditions, or nested functions.
2. Only call Hooks from React function components. Don’t call Hooks from regular JavaScript functions.

#### Hooks and Function Components
```js
const Example = (props) => {
  // You can use Hooks here!
  return <div />;
}
```
or
```js
function Example(props) {
  // You can use Hooks here!
  return <div />;
}
```

---

## useState Hook

useState is a Hook that lets you add React state to function components.

```js
 const [count, setCount] = useState(0);
 ```
* useState declares a “state variable”.
* Argument to the useState() Hook is the initial state.
* useState returns a pair of values:  
  1. the current state and
  2. a function that updates it.

#### useState with previous state
```js 
setCount(prevCount => prevCount + 1)
```

#### useState with object
```js 
const [name, setName] = useState({firstName: '', lastName: ''});

//update the object by setName
setName({...name, lastName: 'xyz'});
```

#### useState with array
```js 
const [items, setItem] = useState([]);

//update the array by setter
setItem([...items, 'nextItem']);
```
