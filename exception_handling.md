### Exception handling
What is an Exception?

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exception handling is used to change the normal flow of the code execution if a specified error (exceptional) condition occurs. This condition is called an exception.

This is what normally happens when an exception is triggered:
- The current code state is saved
- The code execution will switch to a predefined (custom) exception handler function
- Depending on the situation, the handler may then resume the execution from the saved code state, terminate the script execution or continue the script from a different location in the code

We will show different error handling methods:

- Basic use of Exceptions
- Creating a custom exception handler
- Multiple exceptions
- Re-throwing an exception
- Setting a top level exception handler

**Note:** Exceptions should only be used with error conditions, and should not be used to jump to another place in the code at a specified point.

**Basic Use of Exceptions**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.<br/>
Lets try to throw an exception without catching it:
```
<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}
//trigger exception
checkNum(2);
?>
```
The code above will get an error like this:
```
Fatal error: Uncaught exception 'Exception'
with message 'Value must be 1 or below' in C:\webfolder\test.php:6
Stack trace: #0 C:\webfolder\test.php(12):
checkNum(28) #1 {main} thrown in C:\webfolder\test.php on line 6
```
**Try, throw and catch**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To avoid the error from the example above, we need to create the proper code to handle an exception.<br/>
Proper exception code should include:
- Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
- Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
- Catch - A "catch" block retrieves an exception and creates an object containing the exception information<br/>
Lets try to trigger an exception with valid code:
```
<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
```
The code above will get an error like this:

```Message: Value must be 1 or below```

Example explained:<br/>
The code above throws an exception and catches it:
1. The checkNum() function is created. It checks if a number is greater than . If it is, an exception is thrown
2. The checkNum() function is called in a "try" block
3. The exception within the checkNum() function is thrown
4. The "catch" block retrieves the exception and creates an object ($e) containing the exception information
5. The error message from the exception is echoed by calling $e->getMessage() from the exception object<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, one way to get around the "every throw must have a catch" rule is to set a top level exception handler to handle errors that slip through.

**Creating a Custom Exception Class**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To create a custom exception handler you must create a special class with functions that can be called when an exception occurs in PHP. The class must be an extension of the exception class.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The custom exception class inherits the properties from PHP's exception class and you can add custom functions to it.

Lets create an exception class:
```
<?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example...com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
}
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The new class is a copy of the old exception class with an addition of the errorMessage() function. Since it is a copy of the old class, and it inherits the properties and methods from the old class, we can use the exception class methods like getLine() and getFile() and getMessage().

Example explained:

The code above throws an exception and catches it with a custom exception class:

- The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class
- The errorMessage() function is created. This function returns an error message if an e-mail address is invalid
- The $email variable is set to a string that is not a valid e-mail address
- The "try" block is executed and an exception is thrown since the e-mail address is invalid
- The "catch" block catches the exception and displays the error message

**Multiple Exceptions**

It is possible for a script to use multiple exceptions to check for multiple conditions and can also use several if..else blocks, a switch, or nest multiple exceptions. These exceptions can use different exception classes and return different error messages:
```
<?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
  //check for "example" in mail address
  if(strpos($email, "example") !== FALSE) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (customException $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}
?>
```

**Re-throwing Exceptions**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sometimes, when an exception is thrown, you may wish to handle it differently than the standard way. It is possible to throw an exception a second time within a "catch" block.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A script should hide system errors from users. System errors may be important for the coder, but are of no interest to the user. To make things easier for the user you can re-throw the exception with a user friendly message:
```
<?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  try {
    //check for "example" in mail address
    if(strpos($email, "example") !== FALSE) {
      //throw exception if email is not valid
      throw new Exception($email);
    }
  }
  catch(Exception $e) {
    //re-throw exception
    throw new customException($email);
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
}
?>
```
**Set a Top Level Exception Handler**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The set_exception_handler() function sets a user-defined function to handle all uncaught exceptions.
```
<?php
function myException($exception) {
  echo "<b>Exception:</b> " . $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');
?>
```
The output of the code above should be something like this:

```Exception: Uncaught Exception occurred```

In the code above there was no "catch" block. Instead, the top level exception handler triggered. This function should be used to catch uncaught exceptions.


