### Basic Go Commands

`go env`
  
`go run fileName.go`
  
`go run --work fileName.go //--work gives temporary location of binary file.`
  
`go build -o "filename"`

`go build`

---
  
### Resources: https://github.com/gophertuts/go-basics/tree/master/go-learning-resources
  
### Anatonomy of Go Program
```go
  package main
  
  import(
    ...
  )
  
  const ...
  
  var ...
  
  func init(){
    //initilize
  }
  
  func main(){
    //execute
  }
```

### Variables

* #### Implicit

  ```go
  VariableName := Value
  var VariableName = Value
  ```
  
* #### Explicit

  ```go
  var VariableName <dataType> = Value
  ```
    
### Console I/O

* #### Output
  ```go
  fmt.Printf("xyz %formater",var) 
  var := fmt.Sprintf()
  fmt.Println()
  ```
  
* #### Input
  ```go
  scanner := bufio.NewScanner(os.Stdin)    
  scanner.Scan()
  input := scanner.Text()
  ```
  
    

### Convert String 
  ```go
  strconv.ParseInt("String",Base,Size)
  ```
  

### Operators

(Operator dont work on two different type of data in Go)

* #### Arithmetic 
  `+` `-` `/` `*` `%` 
* #### Comparison 
  `<` `>` `<=` `>=` `!=` `==`
* #### Condition 
  `!` `||` `&&`
    

### Type Convesion
  ```go
  DataType(var)
  int()
  ```


### Conditional Statements
  ```go
  if condition {
  
  }else if condition {
  
  }else{
  
  }
  ```
  

### Itratative statements
  ```go
  for initializer; condition; updation{
  
  }
  ```
  

### switch statement
  ```go 
  switch <choice>{
    case arg:
      //statement
    case arg:
      //statement
    default:
      //statement
  }
  ```

### Arrays

* #### 1d
  ```go 
  var [size]arr_name
  var arr_name = [size] DataType
  arr_name := [size] datatype{elements,elements,...}
  ```
    
* #### 2d
  ```go 
  var arr_name = [row][col] datatype {{element,element,..}{element,element,..}...{}}
  ```

* #### Array functions:
  ```go
  len(array)
  ```

### Slices
  ```go 
  var []slice_name = arr_name[startIndex : endIndex]
  
  //dynamic size array/slice
  var []s = make([]int, size)
  //--------or---------
  s := make([]int, size)
  ```
  
* #### Slice functions:
  ```go
  len(slice_name)
  cap(slice_name)
  append(slice_name, element)
  ```

### Range
  ```go 
  for i, element := range arr{
     //Code
  }
  ```

### Maps

Key Value Pairs | Un-Order | Faster then array
  
  ```go 
  var mp map[string]int = map[string]int{
    "key" : value,
    "key" : value,
    ..,
  }
  
  //------or------
   
  mp := map[string]int{
    "key" : value,
    "key" : value,
    ..,
  }
  
  //------or------
  
  mp := make(map[string]int)  //creating empty map
  ```
  
* #### Exist Key??
    value, exist := mp["key"]
  
* #### Map Functions:
  ```go 
  len(mp)
  delete(mp,"key")
  ```
    
### Functions

  ```go
  func functionName(parameter type, ...) (label returnType, ..) {
  
    defer statement //these statements run after when function return.
    
    //code
    
    return var, ..
  }


  //pointer to the function
  function := func(){
    
  }


  //call function with defining
  func(){
    
  }()


  //passing function to the function
  
  func function1 ( temp func(int)int ) int {
    x := temp(5)
    return x
  }
    
  function2 := func ( a int ) int {
    return a*a
  }
    
  function1( function2 )


  //Returning function
    
  func returnFunc(x string) func() {
    return func(){
      fmt.Println(x)
    }
  }
    
  returnFunc("hello")()
  //------or----------
  z := returnFunc("hello")
  z()
  ```
    

### Pointers
  ```go
  var ptr *dataType = &var
  ```
  

### Structure 

Build Custom Types, GoLang dont have class, 
  
  ```go
  type SName struct {
    //state (fields)
    var dataType
    var2 dataType
  }
  
  var obj SName = SName{value, value}
  obj := SName{value, value}
  obj := SName{var:value, var2:value}
  ```
  
* #### Behaviour (Methods)
  ```go
  func (representer structName) methodName() returnType {
    //code
  }
  ```
    

### Interface (Polymorphism)
  ```go 
  type InterfaceName interface {
    //............
  }
  ```
  

### Exported & Unexported / viewable & not viewable

In go, fields and variables that start with an Uppercase letter are "Exported", and are visible to other packages. 

Fields that start with a lowercase letter are "unexported", and are only visible inside their own package.

### Inheritance (Embedded types)

promotion

### Redis

The open source community actively supports quite a few client libraries, including Redigo, Radix and go-redis/redis.
