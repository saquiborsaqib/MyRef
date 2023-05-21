## Try block:
The try block is used to enclose the section of code where an exception might occur. It is followed by one or more catch blocks to handle specific types of exceptions. The syntax is as follows:
```cpp
try {
    // Code that might throw an exception
} catch (ExceptionType1& e1) {
    // Exception handling for ExceptionType1
} catch (ExceptionType2& e2) {
    // Exception handling for ExceptionType2
} catch (...) {
    // Catch-all block for handling any other exceptions
}
```
The try block contains the code that may potentially throw an exception.
Multiple catch blocks can be used to handle different types of exceptions. The catch blocks are evaluated sequentially, and the first matching catch block is executed.
Each catch block specifies the type of exception it can handle, denoted by ExceptionType, followed by a reference to the exception object (& e in the example above).
The catch block for ellipsis (...) is a catch-all block that can handle any type of exception that is not caught by the preceding catch blocks.
Here's an example that demonstrates the basic syntax of a try-catch block:

cpp
Copy code
#include <iostream>

int main() {
    try {
        int numerator = 10;
        int denominator = 0;
        int result = numerator / denominator;  // Division by zero exception
    } catch (const std::exception& e) {
        std::cout << "An exception occurred: " << e.what() << std::endl;
    }

    return 0;
}
In this example, the division operation (numerator / denominator) can result in a division by zero exception. The exception is caught by the catch block, and the error message is displayed to the console.

Throw statement:
The throw statement is used to explicitly throw an exception. It is typically used within the try block when an exceptional condition occurs. The syntax is as follows:
cpp
Copy code
throw ExceptionType(arguments);
The throw statement is followed by the type of the exception to be thrown (ExceptionType) and, optionally, any arguments required by the exception's constructor.
Here's an example that demonstrates the usage of the throw statement:

cpp
Copy code
#include <iostream>
#include <stdexcept>

int divide(int numerator, int denominator) {
    if (denominator == 0) {
        throw std::runtime_error("Division by zero");
    }
    return numerator / denominator;
}

int main() {
    try {
        int result = divide(10, 0);  // Division by zero exception
    } catch (const std::exception& e) {
        std::cout << "An exception occurred: " << e.what() << std::endl;
    }

    return 0;
}
In this example, the divide function checks if the denominator is zero and throws a std::runtime_error with the error message "Division by zero" if it is. The exception is then caught in the catch block, and the error message is displayed.

Catch block:
The catch block is used to handle specific types of exceptions. It follows the try block and contains code that executes when a matching exception is thrown. The syntax is as follows:
cpp
Copy code
try {
    // Code that might throw an exception
} catch (ExceptionType& e) {
    // Exception handling code
}
The catch block specifies the type of exception it can handle (ExceptionType), followed by a reference to the exception object (& e in the example above).
The exception object e can be used within the catch block to access information about the exception, such as the error message.
Here's an example that demonstrates the usage of a catch block:

cpp
Copy code
#include <iostream>
#include <stdexcept>

int main() {
    try {
        throw std::runtime_error("Custom exception");
    } catch (const std::runtime_error& e) {
        std::cout << "An exception occurred: " << e.what() << std::endl;
    }

    return 0;
}
In this example, a std::runtime_error exception is explicitly thrown in the try block. The catch block catches the exception and prints the error message to the console.
