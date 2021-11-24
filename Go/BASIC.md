### Basic Go Commands

`go env`
  
`go run fileName.go`
  
`go run --work fileName.go //--work gives temporary location of binary file.`
  
`go build -o "filename"`

`go build`
  
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

#### * Implicit
    VariableName := Value
    var VariableName = Value
#### * Explicit
    var VariableName <dataType> = Value
    
Console I/O
  Output
    fmt.Printf("xyz %formater",var) 
    var := fmt.Sprintf()
    fmt.Println()
  
  Input
    scanner := bufio.NewScanner(os.Stdin)
    scanner.Scan()
    input := scanner.Text()
    
Convert String 
  strconv.ParseInt("String",Base,Size)
  
Operators
  (Operator dont work on two different type of data in Go)
  Arithmetic + - / * % 
  Comparison < > <= >= != ==
  Condition ! || &&
    
Type Convesion
  DataType(var)
  int()

Conditional Statements
  if condition {
  
  }else if condition {
  
  }else{
  
  }
  
Itratative statements
  for initializer; condition; updation{
  
  }
  
switch statement
  switch <choice>{
    case arg:
      //statement
    case arg:
      //statement
    default:
      //statement
  }
  
Arrays
  1d
    var [size]arr_name
    var arr_name = [size] DataType
    arr_name := [size] datatype{elements,elements,...}
    
  2d
    var arr_name = [row][col] datatype {{element,element,..}{element,element,..}...{}}

  Array functions:
    len(array)

Slices
  var []slice_name = arr_name[startIndex : endIndex]
  
  //dynamic size array/slice
  var []s = make([]int, size)
  --------or---------
  s := make([]int, size)
  
  Slice functions:
    len(slice_name)
    cap(slice_name)
    append(slice_name, element)

Range
  for i, element := range arr{
     //Code
  }

Maps
  Key Value Pairs | Un-Order | Faster then array
  
  var mp map[string]int = map[string]int{
    "key" : value,
    "key" : value,
    ..,
  }
    ------or------
  mp := map[string]int{
    "key" : value,
    "key" : value,
    ..,
  }
    ------or------
  mp := make(map[string]int)  //creating empty map
  
  Exist Key??
    value, exist := mp["key"]
  
  Map Functions:
    len(mp)
    delete(mp,"key")
    
Functions
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
    ------or----------
    z := returnFunc("hello")
    z()
    
Pointers
  var ptr *dataType = &var
  
Structure 

  Build Custom Types, GoLang dont have class, 
  
  type SName struct {
    //state (fields)
    var dataType
    var2 dataType
  }
  
  var obj SName = SName{value, value}
  obj := SName{value, value}
  obj := SName{var:value, var2:value}

  //Behaviour (Methods)
    func (representer structName) methodName() returnType {
      //code
    }
    
Interface (Polymorphism)
  type InterfaceName interface {
    //............
  }
  
Exported & Unexported / viewable & not viewable
  In go, fields and variables that start with an Uppercase letter are "Exported", and are visible to other packages. 
  Fields that start with a lowercase letter are "unexported", and are only visible inside their own package.


Inheritance (Embedded types)
promotion

Redis
  The open source community actively supports quite a few client libraries, including Redigo, Radix and go-redis/redis.
  