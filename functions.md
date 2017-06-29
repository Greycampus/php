### PHP Functions

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A function is a self-contained block of code that performs a specific task.
PHP has a huge collection of internal or built-in functions that you can call directly within your PHP scripts to perform a specific task, like gettype(), print_r(), var_dump, etc.

**PHP User-Defined Functions**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In addition to the built-in functions, PHP also allows you to define your own functions. It is a way to create reusable code packages that perform specific tasks and can be kept and maintained separately form main program. Here are some advantages of using functions:
- Functions reduces the repetition of code within a program — Function allows you to extract commonly used block of code into a single component. Now can you can perform the same task by calling this function wherever you want without having to copy and paste the same block of code again and again.
- Functions makes the code much easier to maintain — Since a function created once can be used many times, so any changes made inside a function automatically implemented at all the places without touching the several files.
- Functions makes it easier to eliminate the errors — When the program is subdivided into functions, if any error occur you know exactly what function causing the error and where to find it. Therefore, fixing errors becomes much easier.
- Functions can be reused in other application — Because a function is separated from the rest of the script, it's easy to reuse the same function in other applications just by including the php file containing those functions.

The following section will show you how easily you can define your own function in PHP.

**Creating and Invoking Functions**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The basic syntax of creating a custom function can be give with:
```
function functionName(){
    // Code to be executed
}
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The declaration of a user-defined function start with the word function, followed by the name of the function you want to create followed by parentheses i.e. () and finally place your function's code between curly brackets {}.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a simple example of an user-defined function, that disply today's date:<br/>
Example:
```
    <?php
    // Defining function
    function whatIsToday(){
        echo "Today is " . date('l', mktime());
    }
    // Calling function
    whatIsToday();
    ?>
```
**Note:** A function name must start with a letter or underscore character not with a number, optionally followed by the more letters, numbers, or underscore characters. Function names are case-insensitive.

**Functions with Parameters**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can specify parameters when you define your function to accept input values at run time. The parameters work like placeholder variables within a function; they're replaced at run time by the values (known as argument) provided to the function at the time of invocation.
```
function myFunc($oneParameter, $anotherParameter){
    // Code to be executed
}
````
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can define as many parameters as you like. However for each parameter you specify, a corresponding argument needs to be passed to the function when it is called.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The getSum() function in following example takes two integer values as arguments, simply add them together and then display the result in the browser.<br/>
Example:
```
    <?php
    // Defining function
    function getSum($num1, $num2){
      $sum = $num1 + $num2;
      echo "Sum of the two numbers $num1 and $num2 is : $sum";
    }
    // Calling function
    getSum(10, 20);
    ?>
```
The output of the above code will be:<br/>
```Sum of the two numbers 10 and 20 is : 30```
 
**Functions with Optional Parameters and Default Values**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can also create functions with optional parameters, just insert the parameter name, followed by an equals (=) sign, followed by a default value, like this.<br/>
Example:
```
    <?php
    // Defining function
    function customFont($font, $size=1.5){
        echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
    } 
    // Calling function
    customFont("Arial", 2);
    customFont("Times", 3);
    customFont("Courier");
    ?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As you can see the third call to customFont() doesn't include the second argument. This causes PHP engine to use the default value for the $size parameter which is 1.5.

**Returning Values from a Function**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A function can return a value back to the script that called the function using the return statement. The value may be of any type, including arrays and objects.<br/>
Example:
```
    <?php
    // Defining function
    function getSum($num1, $num2){
        $total = $num1 + $num2;
        return $total;
    }
    // Printing returned value
    echo getSum(5, 10); // Outputs: 15
    ?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A function can not return multiple values. However, you can obtain similar results by returning an array, as demonstrated in the following example.<br/>
Example:
```
    <?php
    // Defining function
    function divideNumbers($dividend, $divisor){
        $quotient = $dividend / $divisor;
        $array = array($dividend, $divisor, $quotient);
        return $array;
    }
    // Assign variables as if they were an array
    list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
    echo $dividend;  // Outputs: 10
    echo $divisor;   // Outputs: 2
    echo $quotient;  // Outputs: 5
    ?>
```

**Passing Arguments to a Function by Reference**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In PHP there are two ways you can pass arguments to a function: by value and by reference. By default, function arguments are passed by value so that if the value of the argument within the function is changed, it does not get affected outside of the function. However, to allow a function to modify its arguments, they must be passed by reference.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Passing an argument by reference is done by prepending an ampersand (&) to the argument name in the function definition, as shown in the example below:
Example:
```
    <?php
    /* Defining a function that multiply a number
    by itself and return the new value */
    function selfMultiply(&$number){
        $number *= $number;
        return $number;
    }
    $mynum = 5;
    echo $mynum; // Outputs: 5
    selfMultiply($mynum);
    echo $mynum; // Outputs: 25
    ?>
```
**Understanding the Variable Scope**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, you can declare the variables anywhere in a PHP script. But, the location of the declaration determines the extent of a variable's visibility within the PHP program i.e. where the variable can be used or accessed. This accessibility is known as variable scope.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By default, variables declared within a function are local and they cannot be viewed or manipulated from outside of that function, as demonstrated in the example below:<br/>
Example:
```
    <?php
    // Defining function
    function test(){
        $greet = "Hello World!";
        echo $greet;
    }
    test(); // Outputs: Hello World!
    echo $greet; // Generate undefined variable error
    ?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Similarly, if you try to access or import an outside variable inside the function, you'll get an undefined variable error, as shown in the following example:<br/>
Example:
```
    <?php
    $greet = "Hello World!";
    // Defining function
    function test(){
        echo $greet;
    }
    test();  // Generate undefined variable error
    echo $greet; // Outputs: Hello World!
    ?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As you can see in the above examples the variable declared inside the function is not accessible from outside, likewise the variable declared outside of the function is not accessible inside of the function. This separation reduces the chances of variables within a function getting affected by the variables in the main program.<br/>

**The global keyword**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There may be a situation when you need to import a variable from the main program into a function, or vice versa. In such cases, you can use the global keyword before the variables inside a function. This keyword turns the variable into a global variable, making it visible or accessible both inside and outside the function, as show in the example below:<br/>
Example:
```
    <?php
    $greet = "Hello World!";
    // Defining function
    function test(){
        global $greet;
        echo $greet;
    }
    test(); // Outpus: Hello World!
    echo $greet; // Outpus: Hello World!
    // Assign a new value to variable
    $greet = "Goodbye";
    test(); // Outputs: Goodbye
    echo $greet; // Outputs: Goodbye
    ?>
```
**Creating Recursive Functions**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A recursive function is a function that calls itself again and again until a condition is satisfied. Recursive functions are often used to solve complex mathematical calculations, or to process deeply nested structures e.g., printing all the elements of a deeply nested array.
