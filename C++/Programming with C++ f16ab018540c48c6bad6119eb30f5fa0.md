# Programming with C++

# C++

## Memory Management

- **Memory Representation of Program**
    
    ![Selection_006.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Selection_006.png)
    
- **Storage Classes**
    
    ![Storage-Classes-In-C.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Storage-Classes-In-C.png)
    
- **Dynamic Memory Allocation in C**
    - **malloc (Memory Allocation)**
        
        ```c
        //syntax:
        ptr = (cast-type*)malloc(byte-size);
        
        //Dynamically allocate a single large block of memory with the specified size.
        //It returns a pointer of type void which can be cast into a pointer of any form.
        //Initialized each block with the default garbage value initially.
        //If space is insufficient, allocation fails and returns a NULL pointer.
        ```
        
    - **calloc (Contiguous Allocation)**
        
        ```c
        //syntax:
        ptr = (cast-type*)calloc(n, element-size);
        //here, 
        //n is the no. of elements and 
        //element-size is the size of each element.
        
        //Dynamically allocate the specified number of blocks of memory of the specified type.
        //It initializes each block with a default value ‘0’.
        //It returns a pointer of type void which can be cast into a pointer of any form.
        //It has two parameters or arguments as compare to malloc().
        //If space is insufficient, allocation fails and returns a NULL pointer.
        ```
        
    - **free**
        
        ```c
        //Dynamically de-allocate the memory.
        
        //syntax:
        free(ptr);
        ```
        
    - **realloc (Re-Allocation)**
        
        ```c
        //syntax:
        ptr = realloc(ptr, newSize);
        
        //Dynamically change the memory allocation of a previously allocated memory.
        //Re-Allocation of memory maintains the already present value and new blocks will be initialized with the default garbage value.
        //If space is insufficient, allocation fails and returns a NULL pointer.
        ```
        
- **Dynamic Memory Allocation in C++**
    - new
        
        ```cpp
        //syntax:
        pointer-variable = new data-type;
        
        //Allocate a block of memory:
        pointer-variable = new data-type[size];
        
        //Exception Handling with new:
        //When the new operator request for the memory 
        //then if there is a free memory is available then it returns a valid address, 
        //either it throws bad_alloc exception. 
        
        //Exception Handling with 'new'
        try{
        	//'new' Memory Allocation
        }catch (const std::bad_alloc& e){
        	//Handling Exception
        }
        
        //unless “nothrow” is used with the new operator, in which case it returns a NULL pointer
        pointer-variable = new(nothrow) data-type;
        ```
        
    - delete
        
        ```cpp
        // Release memory pointed by pointer-variable
        delete pointer-variable;
        
        // Release block of memory 
        // pointed by pointer-variable
        delete[] pointer-variable;
        ```
        

## Pointers and References

- **Pointer**
    
    ```cpp
    //Syntax
    data_type_of_pointer *pointer_name;
    
    int *ptr;
    ```
    
- **Pointer to Constant**
    
    ```cpp
    //Syntax
    const data_type_of_pointer *pointer_name;
    
    const int *ptr;
    //or
    int const *ptr;
    ```
    
- **Constant Pointer**
    
    ```cpp
    //Syntax
    data_type_of_pointer *const pointer_name = &variable_name;
    
    int *const ptr = &var;
    ```
    
- **Constant Pointer to Constant**
    
    ```cpp
    //Syntax
    const data_type_of_pointer *const pointer_name = &variable_name;
    
    const int *const ptr = &var;
    ```
    
- **Array Pointer**
    
    ```cpp
    int arr[n];
    int *arrPtr = &arr;
    //or
    int *arrPtr = new int[n];
    ```
    
- **Function Pointer**
    
    ```cpp
    // Declaring
    return_type (*FuncPtr) (parameter type, ....); 
    
    // Referencing
    FuncPtr = function_name;
    
    // Dereferencing
    data_type x = *FuncPtr;
    ```
    
- **Double Pointer**
    
    ```cpp
    //Syntax
    data_type_of_pointer **name_of_pointer = &pointer_variable;
    
    int val = 169;
    int *ptr = &val; // storing address of val to pointer ptr.
    int **double_ptr = &ptr; // pointer to a pointer declared which is pointing to an integer.
    ```
    
- **void Pointer**
    
    ```cpp
    //Syntax:
    void * pointer_name;
    
    //void pointer AKA generic pointers 
    //as they can point to any type 
    //and can be typecasted to any type.
    
    //Important Points
    //  void pointers cannot be dereferenced. It can however be done using typecasting the void pointer
    //  Pointer arithmetic is not possible on pointers of void due to lack of concrete value and thus size.
    ```
    
- **NULL Pointer, Wild Pointer and Dangling Pointer**
    
    ```cpp
    //NULL Pointer
    //do not point to any memory location. 
    //They can be created by assigning a NULL value to the pointer. 
    //A pointer of any type can be assigned the NULL value.
    data_type *pointer_name = NULL;
            or
    pointer_name = NULL
    
    //Wild Pointer
    //The Wild Pointers are pointers that have not been initialized with something yet. 
    //These types of C-pointers can cause problems in our programs 
    //and can eventually cause them to crash.
    
    //Dangling Pointer
    //Pointer pointing to a memory location that has been 
    //deleted (or freed)
    //(variable) gone out of Scope
    ```
    
- **Near, Far and Huge Pointers (In C, for 16-bit Intel architectures)**
    
    ```cpp
    //Near pointer
    data type near *pointer_name;
    //A near-pointer is used to hold 16-bit addresses within the current segment. 
    //It is two bytes in size.
    
    //Far pointer
    data type far *pointer_name;
    //A far pointer is thought to be a 32-bit pointer. 
    //It uses the current segment to retrieve information stored outside the computer's memory.
    
    //Huge pointer
    data type huge *pointer_name;
    //Huge pointers have a 32-bit size pointer that may point to any section in the memory.
    ```
    
- **Reference**
    
    ```cpp
    //syntax:
    data_type &ref = variable;
    ```
    
- **Reference to Array**
    
    ```cpp
    //syntax:
    data_type (&ref)[size] = array;
    
    //Reference to an array means aliasing an array while retaining its identity. 
    //Reference to an array will not be an int* but an int[].
    ```
    
- **Reference to Pointer**
    
    ```cpp
    //syntax:
    data_type *&ref = ptr_name;
    ```
    

## Smart Pointers

- Wrapper class over a pointer with an operator like ***** and **->** overloaded.
- Objects that act like pointers but provide additional features to manage memory and ownership more efficiently.
- They are designed to prevent common memory-related bugs like memory leaks and dangling pointers.
- Header: memory
- **std::auto_ptr**
    
    
    *This was used in older versions of the C++ language (**prior to C++11**) that has now been **deprecated**.*
    
    The main **issues with std::auto_ptr** were:
    
    - Ownership Transfer Limitation
    - No Support for Arrays
    - No Safe Copying
    
    ![Auto-Pointer.jpg](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Auto-Pointer.jpg)
    
- **std::unique_ptr**
    
    
    - Represents **unique ownership** of a dynamically allocated object.
    - It ensures that there is only one std::unique_ptr instance pointing to a specific memory location.
    - When the **unique_ptr goes out of scope** or is explicitly reset, the object it points to is automatically deleted.
    - **Unique pointers cannot be copied**, but they **can be moved**, which means transferring ownership from one unique pointer to another.
    
    ![uniquePtr.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/uniquePtr.png)
    
    ```cpp
    // Creating Unique Pointer:
    // Using std::make_unique (preferred way)
    std::unique_ptr<DataType> ptr = std::make_unique<DataType>(constructor_arguments);
    //-or-
    // Using the constructor directly (less preferred way)
    std::unique_ptr<DataType> ptr(new DataType(constructor_arguments));
    
    //Accessing the pointer's value:
    *ptr
    
    //Resetting the unique pointer:
    ptr.reset(); // Releases ownership and deletes the object
    
    //Moving ownership:
    std::unique_ptr<DataType> ptr2 = std::move(ptr); // Ownership transferred from ptr to ptr2
    
    ```
    
- **std::shared_ptr**
    
    
    - **std::shared_ptr** is a smart pointer that allows **shared ownership** of the dynamically allocated object.
    - **Multiple std::shared_ptr** instances can point to the same object, and the object's memory is released automatically when the last std::shared_ptr pointing to it is destructed or reset.
    - Shared pointers use **reference counting** to keep track of how many shared_ptr instances are sharing ownership. When the reference count drops to zero (i.e., no more shared_ptr instances pointing to the object), the object is deleted and the memory is deallocated.
    - Shared pointers are suitable for situations where multiple parts of the code need access to the same dynamically allocated object without explicitly managing memory deallocation.
    
    ![shared_ptr.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/shared_ptr.png)
    
    ```cpp
    //Creating Shared Pointer:
    // Using std::make_shared (preferred way)
    std::shared_ptr<DataType> ptr = std::make_shared<DataType>(constructor_arguments);
    //-or-
    // Using the constructor directly (less preferred way)
    std::shared_ptr<DataType> ptr(new DataType(constructor_arguments));
    
    //Accessing the pointer's value:
    *ptr
    
    //Resetting the shared pointer:
    ptr.reset(); // Releases ownership, but if other shared_ptr instances own the object, it will not be deleted yet.
    
    //Moving ownership:
    std::shared_ptr<DataType> ptr2 = ptr; // ptr and ptr2 now share ownership of the same object
    ```
    
- **std::weak_ptr**
    
    
    - **std::weak_ptr** is another type of smart pointer that is used in conjunction with std::shared_ptr.
    - It provides a **non-owning**, weak reference to the same dynamically allocated object that is managed by a std::shared_ptr.
    - The std::weak_ptr **doesn't contribute to the reference count** of the shared object, meaning it doesn't prevent the object from being deleted when all std::shared_ptr instances are gone.
    - The primary **use case for std::weak_ptr** is to prevent circular references that can lead to memory leaks in cases where objects refer to each other with std::shared_ptr. Using a std::weak_ptr, you can check if the object still exists before using it through the lock() method, which returns a std::shared_ptr (or nullptr if the object is already deleted).
    
    ![weakPtr.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/weakPtr.png)
    
    ```cpp
    //Creating Weak Pointer
    // Using the constructor
    std::weak_ptr<DataType> weakPtr;
    // Converting a shared_ptr to a weak_ptr
    std::weak_ptr<DataType> weakPtr = sharedPtr;
    
    //Accessing the shared object (if it still exists):
    //The lock() method returns a std::shared_ptr, which you can use to access the object. 
    //If the object has already been deleted (or if the std::weak_ptr is empty), lock() will return an empty std::shared_ptr (i.e., nullptr):
    if (auto sharedPtr = weakPtr.lock()) {    
    	// The shared object still exists    
    	*sharedPtr;
    } else {
    	// The shared object has been deleted
    }
    
    //Checking if the weak pointer is empty:
    bool expiredOrNot = weakPtr.expired();
    ```
    

## Type Conversion and Casting

### Implicit Type Conversion

*Done by the compiler on its own, without any external trigger from the user.*

- **Type Promotion**
    
    The promotion follows a hierarchy, with smaller data types being promoted to larger data types to prevent data loss. The hierarchy, in increasing order of size, is generally as follows: ***bool < char < short < int < unsigned int < long < unsigned long < long long < float < double < long double***
    

### Explicit Type Conversion

- **Conversion by assignment (aka forceful casting) ( C Style)**
    
    ```cpp
    //Syntax:
    (type) expression;
    ```
    
- **Type Casting (C++ Style)**
    - **Static Cast**
        
        Most commonly used casting operator for safe conversions between compatible types.
        
         In case of inheritance, It can provide both upcasting and downcasting. To use static_cast, the base class must be accessible, non virtual and unambiguous.
        
        Checks at compile-time and performs conversions that the compiler considers to be safe.
        
        ```cpp
        new_type = static_cast<new_type>(expression);
        ```
        
    - **Dynamic Cast**
        
        It is primarily used for downcasting in the context of polymorphism.
        
        Checks at runtime and requires that the classes involved have at least one virtual function. The operator ensures that the conversion is valid within the inheritance hierarchy.
        
        ***Note:***
        
        - *A Dynamic_cast has runtime overhead because it checks object types at run time using “**Run-Time Type Information**“.*
        - *If there is a surety we will never cast to wrong object then always avoid dynamic_cast and use static_cast.*
        
        ```cpp
        new_type = dynamic_cast<new_type>(expression);
        ```
        
    - **Const Cast**
        
        It is used to add or remove the **`const`** qualifier or **`volatile`** qualifier from a variable.
        
        ```cpp
        new_type = const_cast<new_type>(expression);
        ```
        
    - **Reinterpret Cast**
        
        It allows you to reinterpret the binary representation of a data type as another data type.
        
        It is used to convert a pointer of some data type into a pointer of another data type, even if the data types before and after conversion are different.
        
        It is a way to achieve Type Punning.
        
        ```cpp
        new_type = reinterpret_cast<new_type>(expression);
        ```
        

### **User-Defined Conversions**

In C++, user-defined type conversions allow you to define how objects of your custom classes can be implicitly or explicitly converted to other data types.

There are two main ways to achieve user-defined type conversions:

- **Conversion Constructors**
    
    ```cpp
    class ClassName {
    	public:    
    		// Conversion constructor    
    		ClassName(parameter_type arg) {        
    			// Constructor body        
    			// Initialize the object using the argument 'arg'    
    		}
    };
    ```
    
- **Conversion Operators**
    
    ```cpp
    class ClassName {
    	public:    
    		// Conversion operator    
    		operator target_type() const {        
    			// Conversion logic        
    			// Return the object converted to the target_type    
    		}
    };
    ```
    

### Type Punning

Type punning involves interpreting the binary representation of data in memory as a different data type than its original type.

It is often used in low-level programming or specific optimization scenarios where direct manipulation of memory representation is necessary.

It should be used with caution and only with a deep understanding of the potential risks and the proper methods to ensure safety and correctness.

The common methods of type punning:

- **Pointer Type Punning**
- **Union Type Punning**
- **memcpy and std::memcpy**
- **std::bit_cast (C++20)**

## I/O and File Handling

- **Streams**
    
    The stream concept is a fundamental **abstraction** that provides a unified way to **handle input and output operations from various sources**, such as the console, files, and other devices. Streams **simplify the I/O process** and make C++ a versatile language for **data manipulation**.
    
- Standard Input/Output
- File I/O
- File Manipulation
- Stream States and Error Handling
- Stringstream
- Formatted I/O
- Standard I/O Library
- Error Reporting and Exception Handling in I/O

## Object Oriented Programming

- Classes & Objects
- Abstraction
- Encapsulation
- Inheritance
- Polymorphism
- Dynamic Binding
- Message Passing

## Generic Programming

- Templates: function templates and class templates
- Template parameters: type parameters and non-type parameters.
- Template specialization
- Template meta-programming
- Type traits
- Variadic templates
- Concepts

## Functional Programming

- Lambda expressions
- Higher-order functions
- Immutable data structures
- Recursion
- Lazy evaluation
- Function composition

## Standard Template Library

## Exception Handling

- Basic syntax and semantics
- Standard Exception Classes
- Exception classes
- Throwing exceptions
- Catching exceptions
- Exception handling hierarchy
- Exception safety
- Exception specifications (deprecated)
- Resource management

# Regular Expression

A regular expression, often abbreviated as "**regex**" or "**regexp**," is a powerful and concise way to define patterns for matching strings.

It's a textual representation of a pattern that can be used for searching, matching, and manipulating strings.

***Stephen Cole Kleene** invented Regular Expression in mid 1950’s.*

C++ supports regular expressions through the Standard Library's `<regex>` header, which provides classes and functions for working with regular expressions.

# Data Structures and Algorithms

## Complexity

- **Big O Notation:**
    - Complexity is expressed using big O notation (O notation).
    - The notation describes the upper bound of the growth rate of the algorithm with respect to the input size 'n'.
    - The big O notation is represented as **O(f(n))**, where **'f(n)'** is a function that characterizes the algorithm's growth rate concerning 'n'.
- **Time Complexity:**
    - Time complexity answers the question: "How does the runtime of an algorithm grow as the input size increases?”
    - In the context of Time Complexity, 'f(n)' typically represents the number of basic operations (such as comparisons, assignments, arithmetic operations) the algorithm performs in terms of 'n'.
- **Space Complexity:**
    - Space complexity answers the question: "How much additional memory does the algorithm require as the input size increases?”
    - In the context of Space Complexity, 'f(n)' typically represents the number of additional memory units (such as bytes or elements in data structures) the algorithm uses concerning 'n'.
- **Common Big O Complexities:**
    
    
    - **O(1) - Constant Time:**
        
        In constant time complexity, the algorithm's runtime remains constant, regardless of the input size 'n'. It performs a fixed number of operations, making it the most efficient complexity.
        
    - **O(log n) - Logarithmic Time:**
        
        In logarithmic time complexity, the algorithm's runtime grows logarithmically with the input size 'n'. It reduces the problem size by a constant factor with each step.
        
    - **O(n) - Linear Time:**
        
        In linear time complexity, the algorithm's runtime grows linearly with the input size 'n'. As 'n' increases, the runtime increases linearly.
        
    - **O(n log n) - Linearithmic Time:**
        
        In linearithmic time complexity, the runtime grows between linear and logarithmic. Common in efficient sorting algorithms.
        
    - **O(n^2) - Quadratic Time:**
        
        In quadratic time complexity, the runtime grows quadratically with 'n'. It often involves nested loops.
        
    - **O(n^3) - Cubic Time:**
        
        In cubic time complexity, the runtime grows cubically with 'n'. It usually results from algorithms with three nested loops.
        
    - **O(2^n) - Exponential Time:**
        
        In exponential time complexity, the runtime grows exponentially with 'n'. Even small increases in 'n' lead to significant increases in runtime.
        
    - **O(n!) - Factorial Time:**
        
        In factorial time complexity, the runtime grows factorial with 'n'. Highly inefficient and impractical for large 'n'.
        
    
    ![R.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/R.png)
    

## Strings

A **data type** used to represent **a sequence of characters**. 

Strings are defined as **an array of characters.** The difference between a character array and a string is the string is **terminated with a special character ‘\0’.**

![Strings.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Strings.png)

- **Strings in C (string.h/cstring.h)**
    
    ```c
    //Declaring and Initializing Strings:
    // Method 1: Using an array of characters
    char str[100];
    char str1[] = "Hello, World!";
    // Method 2: Using a pointer to a string literal
    const char* str2 = "Hello, World!";
    
    //Input Methods:
    //Using scanf() to read a string (excluding spaces):
    scanf("%s", str);
    //Using fgets() to read a string (including spaces):
    fgets(str, sizeof(str), stdin);
    
    //Output Methods:
    //Using printf() to display a string:
    printf("String: %s\n", str);
    //Using puts() to display a string:
    puts(str); // Automatically adds a newline character
    //Using fputs() to display a string:
    fputs(str, stdout); // Automatically adds a newline character
    //Using putchar() to display a single character at a time:
    putchar(str[i]);
    
    //string.h or cstring.h :
    //This header file defines several functions to manipulate C strings and arrays.
    ```
    
- **Strings in C++ (std::string)**
    
    In C++, strings are represented by the **`std::string`** class, which is part of the C++ Standard Library. This class provides a safer and more convenient way to work with strings compared to C-style strings.
    
    **Strings are slower** when compared to implementation than character array.
    
    ```cpp
    #include <string>
    
    //Declaring and Initializing Strings:
    // Initialization using a string literal
    std::string str1 = "Hello, World!"; 
    // Initialization using a constructor
    std::string str2("This is a string."); 
    ```
    
- **General Operations performed on String**
    - **Length**
        
        ```cpp
        //1. Initialize a variable to keep track of the length and set it to 0.
        //2. Iterate through the characters of the string one by one using a loop.
        //3. For each character encountered, increment the length counter by 1.
        //4. Stop the loop when the null character ('\0') is found, indicating the end of the string.
        //5. The final value of the length counter will be the length of the string.
        
        //-or-
        
        //using strlen() for C-style strings
        //using length() or size() for C++ strings
        ```
        
    - **Concatenation**
        
        ```cpp
        void concatenateStrings(char destination[], const char source[]) {
            int destIndex = 0;
            while (source[destIndex] != '\0') {
                destination[destIndex] = source[destIndex];
                destIndex++;
            }
            destination[destIndex] = '\0';
        }
        
        //In C
        //Using strcat() function
        strcat(str1, str2); // Concatenates str2 to str1
        
        //In C++
        //Using + operator (for C++ std::string):
        std::string result = str1 + str2;
        //Using append() function (for C++ std::string):
        str.append(str2); // Concatenates str2 to str
        //Using += operator (for C++ std::string):
        str += str2; // Concatenates str2 to str
        ```
        
    - **Searching:** Finding the position of a substring within a string.
        
        ```cpp
        //1. Initialize two variables, mainIndex and subIndex, to keep track of the current position in the main string and the substring, respectively. Set both variables to 0 initially.
        //2. Start a loop that iterates through each character of the main string using the mainIndex.
        //3. Inside the loop, check if the character at the current mainIndex matches the character at the current subIndex in the substring.
        //4. If the characters match, increment both mainIndex and subIndex to check the next characters.
        //5. If the characters don't match, reset the subIndex to 0, indicating a mismatch and start searching the substring from the beginning again.
        //6. Continue this process until either the end of the main string is reached (indicating the substring is not found) or the entire substring is matched in the main string.
        //7. If the substring is found, the position of the substring within the main string is given by mainIndex - subIndex. If the substring is not found, return a special value to indicate that the substring is not present.
        
        //-or-
        
        // In C (using cstring):
        // You can use the strstr() function to find the position of a substring within a string. 
        // The strstr() function returns a pointer to the first occurrence of the substring in the string.
        // You can then calculate the position by subtracting the base address of the string from the returned pointer.
        const char mainString[] = "Hello, World!";
        const char subString[] = "World";
        char* result = strstr(mainString, subString);
        if (result != NULL) {
        	int position = result - mainString;
        } else {
        	printf("Substring not found.\n");
        }
        
        //-or-
        
        // In C++ (using std::string):
        std::string mainString = "Hello, World!";
        std::string subString = "World";
        size_t position = mainString.find(subString);
        ```
        
    - **Substring:** (aka **String Slicing**) Extracting a portion of the string based on a range of indices.
        
        ```cpp
        //1. Create a new character array to hold the substring.
        //2. Iterate through the characters of the original string from the starting index to the ending index (exclusive).
        //3. Copy the characters from the original string to the new substring character by character.
        //4. Null-terminate the new substring by adding a null character ('\0') at the end.
        //5. The new character array now contains the extracted substring.
        
        void substring(const char source[], int start, int end, char destination[]) {
            int i, j;
            for (i = start, j = 0; i < end && source[i] != '\0'; i++, j++) {
                destination[j] = source[i];
            }
            destination[j] = '\0'; // Null-terminate the substring
        }
        
        // -or- 
        // In C++ (using std::string)
        std::string substr = str.substr(7, 5);
        ```
        
    - **Comparison:** Comparing two strings to check if they are equal, less than, or greater than each other.
        
        Determine their relative order in lexicographic (dictionary) order. In **lexicographic order**, strings are compared character by character, starting from the first character, until a difference is found or one of the strings ends. The comparison result can be one of the following: equal, less than, or greater than.
        
        ```cpp
        //In C, using the strcmp():
        //The strcmp() function returns an integer value that indicates the comparison result. 
        //The return value is 0 if the strings are equal, 
        //a negative value if the first string is less than the second string, 
        //and a positive value if the first string is greater than the second string.
        int result = strcmp(str1, str2);
        
        //-or-
        
        //In C++,
        //Use the overloaded comparison operators (==, <, >, <=, >=, !=) directly with std::string objects to compare them. 
        //The comparison operators are already implemented for std::string, making string comparison straightforward in C++.
        
        ```
        
    - **Trimming:** Removing leading and trailing spaces or specific characters from a string.
        
        ```cpp
        //Algo:
        //1. Find the index of the first non-trimmed character in the string, starting from the beginning (leading trim).
        //2. Find the index of the last non-trimmed character in the string, starting from the end (trailing trim).
        //3. Create a new string that includes the characters between the leading trim index and the trailing trim index (both inclusive).
        //4. The new string is the trimmed version of the original string.
        
        // In C
        void trim(char str[]) {
            int start = 0;
            int end = strlen(str) - 1;
        
            // Find the leading trim index
            while (str[start] == ' ' || str[start] == '\t' || str[start] == '\n') start++;
        
            // Find the trailing trim index
            while (end >= start && (str[end] == ' ' || str[end] == '\t' || str[end] == '\n')) end--;
        
            // Create a new string with the trimmed content
            for (int i = start; i <= end; i++) str[i - start] = str[i];
        
        		// Null-terminate the trimmed string
            str[end - start + 1] = '\0'; 
        }
        
        // In C++
        std::string trim(const std::string& str) {
            size_t start = str.find_first_not_of(" \t\n");
            if (start == std::string::npos) return ""; // String contains only whitespace, return an empty string
            size_t end = str.find_last_not_of(" \t\n");
            return str.substr(start, end - start + 1);
        }
        ```
        
    - **Replacement:** Replacing occurrences of a substring with another substring.
        
        ```cpp
        //Algorithm:
        //1. Start searching for the first occurrence of the substring within the original string.
        //2. If the substring is found, replace it with the new substring at that position.
        //3. Continue searching for the next occurrence of the substring, and repeat the replacement process until all occurrences are replaced.
        //4. If no more occurrences of the substring are found, the replacement process is complete.
        
        //In C
        void replaceSubstring(char original[], const char find[], const char replace[]) {
            int findLen = strlen(find);
            int replaceLen = strlen(replace);
        
            char result[1000]; // Assuming the result won't exceed this size
            int resultIndex = 0;
            int originalLen = strlen(original);
        
            for (int i = 0; i < originalLen; i++) {
                if (strncmp(&original[i], find, findLen) == 0) {
                    // Found a match, replace the substring
                    strcpy(&result[resultIndex], replace);
                    resultIndex += replaceLen;
                    i += findLen - 1; // Skip over the matched substring in the original
                } else {
                    // No match, copy the character from original to result
                    result[resultIndex] = original[i];
                    resultIndex++;
                }
            }
        
            result[resultIndex] = '\0'; // Null-terminate the result
            strcpy(original, result); // Copy the result back to the original string
        }
        
        //In C++
        void replaceSubstring(std::string& original, const std::string& find, const std::string& replace) {
            size_t pos = 0;
            while ((pos = original.find(find, pos)) != std::string::npos) {
                original.replace(pos, find.length(), replace);
                pos += replace.length();
            }
        }
        ```
        
    - **Splitting:** (aka **Tokenization**) Breaking a string into substrings based on a delimiter.
        
        ```cpp
        //Algorithm:
        //1. Start from the beginning of the original string.
        //2. Search for the first occurrence of the delimiter in the string.
        //3. Extract the substring from the start of the string up to the delimiter (excluding the delimiter itself) as the first token.
        //4. Move the starting position to the character after the delimiter.
        //5. Repeat steps 2 to 4 until all occurrences of the delimiter are processed.
        //6. The extracted substrings form the tokens resulting from the string splitting process.
        
        //In C, using strtok():
        char str[] = "apple,banana,orange";
        const char delimiter[] = ",";
        // Use strtok() to split the string into tokens
        char* token = strtok(str, delimiter);
        while (token != NULL) {
        	printf("%s\n", token);
        	token = strtok(NULL, delimiter);
        }
        
        //In C++, using std::stringstream
        std::string str = "apple,banana,orange";
        std::stringstream ss(str);
        std::string token;
        while (std::getline(ss, token, ',')) {
        	std::cout << token << std::endl;
        }
        
        //In C++, using
        std::string str = "apple,banana,orange";
        const char delimiter = ',';
        size_t start = 0;
        size_t pos = 0;
        std::string token;
        while ((pos = str.find(delimiter, start)) != std::string::npos) {
        	token = str.substr(start, pos - start);
        	start = pos + 1;
        }
        //Last token after the last delimiter
        token = str.substr(start);
        ```
        
    - **Parsing:** Converting a string representation of a number or other data types into their respective data types.
        
        use library functions like **`atoi`**, **`atol`**, **`atoll`** (for integer types), **`strtof`**, **`strtod`**, **`strtold`** (for floating-point types), or **`std::stoi`**, **`std::stol`**, **`std::stoll`**, **`std::stof`**, **`std::stod`**, **`std::stold`** in C or C++.
        
    - **Validation:** Checking if a string meets specific criteria or constraints.
        - **Using Standard Library Functions**
        - **Using Regular Expressions**
        - **Custom Validation Logic**

## Arrays

**Fundamental data structure; Fixed Size; Zero-based Indexing; Homogeneous Elements; Contiguous Memory**

![arrays.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/arrays.png)

![c-array-representation-in-memory.jpg](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/c-array-representation-in-memory.jpg)

```cpp
//Declaring an Array:
data_type array_name[size];

//Initializing an Array during Declaration:
data_type array_name[size] = {value1, value2, ..., valueN};

//Accessing an Array's Element:
array_name[index] = value;
```

- **Length/Count**: The current number of elements stored in the array (variable value).
- **Size/Capacity**: The maximum number of elements the array can hold without resizing (fixed value).

**In C,** arrays are part of the core language and arrays are relatively simple, do not come with built-in methods for common operations and there is no built-in array class or container provided in the standard library. 

**In C++,** arrays are also present as a fundamental data structure, similar to C. However, C++ provides a more sophisticated array-based container class called **`std::array`**. Additionally, C++ introduces dynamic arrays through the **`std::vector`** class, which is a dynamic array that automatically resizes itself when elements are added or removed.

- **Traversing**
    - **Using Array Indexing**
        
        ```cpp
        for (int i = 0; i < array_size; i++) {
            // Access array elements using array_name[i]
        }
        
        //-or-
        
        int i = 0;
        while (i < array_size) {
            // Access array elements using array_name[i]
            i++;
        }
        ```
        
    - **Using Pointer Arithmetic**
        
        ```cpp
        data_type* ptr = array_name;
        for (int i = 0; i < array_size; i++) {
            // Access array elements using *ptr
            ptr++;
        }
        ```
        
    - **Range-based For Loop (C++ Only)**
        
        ```cpp
        for (data_type element : array_name) {
            // Use 'element' directly
        }
        ```
        
    - **Standard Library Algorithms (C++ Only):**
        
        ```cpp
        #include <algorithm>
        
        // Using std::for_each to print array elements
        std::for_each(std::begin(array_name), std::end(array_name), [](data_type element) {
            // Process 'element'
        });
        ```
        
- **Insert**
    - **In Unsorted Array**
        - **Insert at the end:**
            
            In an unsorted array, the insert operation is faster as compared to a sorted array because we don’t have to care about the position at which the element is to be placed.
            
            ![Insert-Operation-in-Unorted-Array.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Insert-Operation-in-Unorted-Array.png)
            
        - **Insert at any position:**
            
            Insert operation in an array at any position can be performed by shifting elements to the right, which are on the right side of the required position.
            
            ![Insert-an-element-at-a-specific-position-in-an-Array.jpg](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Insert-an-element-at-a-specific-position-in-an-Array.jpg)
            
    - **In Sorted Array**
        
        In a sorted array, a search operation is performed for the possible position of the given element by using **Binary search,** and then an insert operation is performed followed by shifting the elements.
        
        ![Insert-Operation-in-Sorted-Array.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Insert-Operation-in-Sorted-Array.png)
        
- **Delete**
    
    
    Element to be deleted is searched using binary search if array is sorted otherwise using linear search, and then the delete operation is performed followed by shifting the elements.
    
    ![DeletedOperationinSortedArray.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/DeletedOperationinSortedArray.png)
    
- **Searching**
    - **Linear Search** (Sequential Search):
    - **Binary Search**:
    - **Jump Search**:
    - **Interpolation Search**:
    - **Exponential Search**:
    - **Ternary Search**:
    - **Fibonacci Search**:
- **Sorting**
    - **Bubble Sort:**
        1. Start by considering the first two elements in the list.
        2. Compare these two elements. If the first element is greater than the second element, swap them so that the smaller one comes before the larger one.
        3. Move on to the next pair of adjacent elements (the second and third elements) and repeat the comparison and swap process if necessary.
        4. Continue this process for all adjacent elements in the list. After the first pass, the largest element will have "bubbled up" to the last position in the list.
        5. Now, you need to repeat the same process for the remaining unsorted elements, but this time excluding the last element (as it's already in its correct position). Repeat the process for the remaining elements, excluding the last sorted element in each pass.
        6. Keep repeating the process until the entire list is sorted.
        
        **Time Complexity:** 
        
        - Best Case: O(n)
        - Average and Worst Case: O(n^2)
        
        **Space Complexity:** O(1)
        
        ```cpp
        void bubbleSort(int arr[], int n)
        {
            int i, j;
            bool swapped;
            for (i = 0; i < n - 1; i++) {
                swapped = false;
                for (j = 0; j < n - i - 1; j++) {
                    if (arr[j] > arr[j + 1]) {
                        swap(arr[j], arr[j + 1]);
                        swapped = true;
                    }
                }
          
                // If no two elements were swapped
                // by inner loop, then break
                if (swapped == false)
                    break;
            }
        }
        ```
        
    - **Selection Sort:**
    - **Insertion Sort:**
    - **Merge Sort:**
    - **Quick Sort:**
    - **Heap Sort:**

## Linked Lists

Ordered Data Structure, Linear Data Structure, E*lements are not stored at contiguous memory locations, Elements in a linked list are linked using pointers*

- **Node:** Element of Linked List Contains data and pointer to the next node.
- **Head:** First node of the linked list.
- **Tail:** Last node of the linked list.

### **Types of Linked Lists**

- **Singly**
    
    ![Singly-Linked-List1.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Singly-Linked-List1.png)
    
    ```cpp
    // Node 
    template <typename T> class Node {
    public:
      T data;
      Node<T> *next;
    
      Node() {}
      Node(T d, Node<T> *n = NULL) : data(d), next(n) {}
    };
    
    // Traversing Singly Linked List
    template <typename T> void traverseLinkedList(Node<T> *head) {
      while (head != NULL) {
        // ..... head->data
        head = head->next;
      }
    }
    
    // Traversing Singly Linked List Reccursivly
    template <typename T> void traverseLinkedList(Node<T> *head) {
      if (head == NULL) return;
      //......  head->data
    	traverseLinkedList(head->next);
    }
    
    // Reverse Linked List 
    template <typename T> Node<T> * ReverseLinkedList(Node<T> *head) {
    	Node<T> * prev = NULL;
    	Node<T> * current = head;
      while (current != NULL) {
        Node<T> *next = current->next;
    		current->next = prev;
    		prev = current;
    		current = next;
      }
    	return prev;
    }
    
    template <typename T> Node<T> * ReverseLinkedList(Node<T> *head, Node<T> *prev = NULL) {
    	if (head == NULL) return;
    	Node<T> *next = head->next;
    	head->next = prev;
    	return ReverseLinkedList(next, head);
    }
    
    // Zipper Linked List 
    template <typename T> Node<T> * zipperLinkedList(Node<T> *list1, Node<T> *list2) {
      Node<T>*zippedList = list1;
      int counter = 0;
      while (list1 != NULL && list2 != NULL) {
          if(counter%2 == 0){
              Node<T>*temp = list1->next;
              list1->next = list2;
              list1 = temp;
          }else{
              Node<T>*temp = list2->next;
              list2->next = list1;
              list2 = temp;
          }
          counter++;
      }
      return zippedList;
    }
    ```
    
- **Doubly**
    
    ![Doubly-Linked-List.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Doubly-Linked-List.png)
    
    ```cpp
    // Node
    template <typename T> class Node {
    public:
      T data;
      Node<T> *next;
    
      Node() {}
      Node(T d, Node<T> *n = NULL) : data(d), next(n) {}
    };
    
    template <typename T> class Node2D : public Node<T> {
    public:
      Node2D<T> *previous;
    
      Node2D() {}
      Node2D(T d, Node2D<T> *n = NULL, Node2D<T> *p = NULL)
          : Node<T>(d, n), previous(p) {}
    };
    ```
    
- **Circular**
    
    ![Circular-Linked-List.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Circular-Linked-List.png)
    
- **Circular Doubly**
    
    ![Doubly-Circular-Linked-List.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Doubly-Circular-Linked-List.png)
    
- **Header**
    
    ![Grounded-Headed-Linked-List.png](Programming%20with%20C++%20f16ab018540c48c6bad6119eb30f5fa0/Grounded-Headed-Linked-List.png)
    

## Stacks

## Queues

## Trees

## Heap

## Hash

## Graphs

## Matrix

## Greedy Algorithm

## Dynamic Programming

# SQL

# Networking

## Models

- OSI (Open System Interconnection)
- TCP/IP (Transmission Control Protocol / Internet Protocol)

## Protocols

### Physical Layer

- Serial
- Ethernet
- WiFi
- Bluetooth

### Network Layer

- IP (Internet Protocol)

### Transport Layer

- TCP (Transmission Control Protocol)
- UDP (User Datagram Protocol)

### Application Layer

- HTTP (Hypertext Transfer Protocol)
- FTP (File Transfer Protocol)
- SMTP (Simple Mail Transfer Protocol)
- SSH (Secure Shell)
- DNS

# Operation System

## OS Structures

## Processes

## Threads

## Process Synchronisation

## CPU Scheduling

## Deadlock

## Main Memory

## Virtual Memory

## Mass-Storage Structure

## File System Interface

## File System Implementation

## I/O System

## Protection

## Security

## Virtual Machines

## Distributed Systems

## The Linux System and POSIX

## Windows and Windows-API/Win32

# Software Architecture

## Design Principles

## Design Patterns

## Architectural Styles

## Scalability and Performance Consideration

# Debugging

## Types of errors

## Debugging technique

## Debugging memory issues

## Debugging multi-threaded programs

## Debugging tools

# Testing

## Types of testing

## Testing frameworks