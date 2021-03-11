/***********Where to Add the Script:
*Can be added any Where inside the head tag and body tag
*Recommended is to add at the bottom of the body tag.
*   Internal Script:
*       <script>.......</script>
*   External Script:
        <script src="">......</script>
*/

/***********Statement:
    <statement>;
*/

/***********Console:*/
    console.log("HELLO, World..."); //use to output on console

/***********Variables: */
    //Declaration:
    let variableName = 'value';
        or
    var variableName = 'value';

    //Constant Variables:
    const variableName = 'value';

/***********Comments */
    //single Line comment
    
    /*Multi 
    Line 
    Comment*/

/***********Data Types 
*   Number
*   String
*   Boolean
*   Null
*   Undefined
*   Object
*   Symbol
*/

/***********Strings */
    //Represents with single Quots('') or Double Quots("")
        'HELLO, World';
            or 
        "HELLO, World";

    //Concatination of String
        'FirstName'+' '+'LastName';
    
    //Getting Character from String
        let string = "Hello, World.";
        string[4];  //this will give 'o', coz it is on 4 position.
    
    //String Propereties
        string.length;

    //String Methods
        string.toUpperCase();   //returns the string in UPPER case
        string.toLowerCase();   //returns the string in lower case
        string.indexOf('W');    //returns the index of first 'W' occurance in string
        string.lastIndexOf('o');    //returns the index of last 'o' occurance in string
        string.slice(startIndex , endIndex);    //return a sub string from the string, 1st argument takes starting index and 2nd argument takes end index.
        string.substr(startIndex, length);  //return a sub string from the string, 1st argument takes starting index and 2nd argument takes the number of characters.
        string.replace(searchString, replaceString);    //replace a substring in 1st argument with a given string in 2nd argument.
        string.includes('H'); //Check whether the given characters are present in the string or not by returning true or false, this method also works of arrays. 

/***********Numbers */
    //operators
        //+, -, *, /, **(power off), %, ++, --, +=, -=, *=, /=

    //Order of Operation: BIDMAS

    //NaN (Not a Number)

    //Concatination of Numbers  

/***********Template Strings */
    const title='';
    const author='Mario';
    const likes=30;

    //Concatination Way
        let result = 'The blog called ' + title + ' by ' + author +' has ' + likes + ' likes';

    //Template String Way
        let result = `The blog called ${likes} by ${author} has ${likes} Likes`;

    //Creating HTML Templates
        let html = `
            <h2>${title}</h2>
            <p>By ${author}</p>
            <span>This blog has ${likes} likes</span>
        `;

/***********Arrays */
    //Syntax:
        let arrName = ['values', 'values', 1, '...'];

    //Array's Methods
        arrName.join(',');  //this returns the string containing all the elements in the array by seprating with ','.
        arrName.indexOf('element');   //returns the index number of element in array.
        arrName.concat(secondArr);  //concatinate two array i.e., arrName and secondArr.
        arrName.push('value');  //add new value to array at last and return length of array.
        arrName.pop();  //delete the last element from array and return the deleted Element.

/***********Null & Undefined */
    //Undefined 
        //Unintentional value 
        //given by compiler when user don't put any.
        //Any operation with undefined value gives NaN.

    //Null
        //Intentional value
        //When any operation performs on Null it acts as zero.

/***********Boolean */
    //Represents Without any Quation marks
        true; false;

/***********Expilicit Type Conversion */
    //Type Checking 
        typeof variableName;
    
    //To Number
        Number('100');
            //if string with alphabets is pass in the argument then it returns NaN

    //To String 
        String(100);

    //To Boolean
        Boolean()
            //if string is passed then empty string gives false and string with any length will give true.
            //if Number is passed then +ve numbers considers as true and 0/-ve numbers considers as false.

/***********Control Flow  */

    //Loops
    //use to cycle through data

        //for Loops
            for(let i = 0; i < 5; i++){
                //code block
            }

        //while Loops
            let i = 0;
            while(i < 5){
                //code block
                i++;
            }

        //do-while Loops
            let i = 0;
            do{
                //code block
                i++;
            }while(i < 5);

    //Conditional Statements
    //use for checking conditions

        //if Statements
            if (condition || condition) {
                
            }

        //if-else Statements
            if (condition && condition) {
                
            } else {
                
            }

        //if-else-if Statements
            if (condition) {
                
            }else if (condition) {
                
            }else{

            }

        //switch Statements
            switch (key) {
                case value:
                    
                    break;
            
                default:
                    break;
            }

        //break and continue

 /***********Varibles & block scope*/
         
 /***********Functions */
    //Function Declaration
        function name(params) {
            //code
            return null;
        }

    //Function Expression
        const name = function (params) {
            //code
            return null;
        };

    //Arrow Functions
        const name = (params) => {
            
        };
        //if a function takes only one parameter and only returning some thing then we can define it like:
            const name = params => null;  

    //CallBacks
        const Func = (callbackFunc) => {
            params;
            callbackFunc(params);
        };

        Func((params) => {
            //code
        });

    //foreach
        array.forEach((element, index)=> {
            
        });

/***********Objects */
    //Object Litrals Notation
    let objName = {
        key1: 'value1',
        key2: 'value2',

        name1: function (params) {
            this.key1;
            //code
        },
        name2(params) {
            this.key2;
            //code
        }

    };

    //access the member 
    objName.key1;
        or
    objName['key1'];

/***********Math Object */
//Properties
    Math.PI;
//Methods
    Math.round();
    Math.floor();
    Math.ceil();
    Math.trunc();
    Math.random();  //return a random number from 0 to 1;
