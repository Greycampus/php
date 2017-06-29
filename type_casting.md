### Typecasting:

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The meaning of type casting is to use the value of a variable with different data type. In other word typecasting is a way to utilize one data type variable into the different data type. Typecasting is the explicit conversion of data type because user explicitly defines the data type in which he wants to cast. In this tutorial, we will explore various aspects of PHP Type casting.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP does not require or support type definition of the variable. In PHP we never define data type while declaring the variable. In PHP variables automatically decide the data type on the basis of the value assignment or context. For example:
```
<?php
$i =1;
var_dump($i); //$i is integer
$i = 2.3;
var_dump($i); //$i is float
$i = "php type casting";
var_dump($i)//$i is string
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In above example, you can see that variable $i type is getting changed on the different type of value assignment. So due to this flexible nature of the PHP, we do not need to type cast variable always. But Sometimes when we need extra security in the variable we cast type. For example, if we are taking some integer input from user then we should type cast.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type casting in PHP works same as C programming. Desired data type name with parenthesis before the variable which we need to cast. For example, if we need to cast the string to the integer then below will work:
```
<?php
$string_var = "string value for php type";
$int_var = (int)$string_var;
var_dump($ini_var);
?>
```
We can cast following data type variable in PHP

  * (int), (integer) - cast to integer
  * (bool), (boolean) - cast to boolean
  * (float), (double), (real) - cast to float
  * (string) - cast to string
  * (array) - cast to array
  * (object) - cast to object
  * (unset) - cast to NULL (PHP 5)

**PHP type Casting to Integer**<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using (int) or (integer) keyword we can cast/convert any data type value to the integer. If we need to take integer casting then we can also use intval() function.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we will convert boolean to an integer then False will output 0 and true will output 1. For example
```
<?php
$bool_false = false;
$int_val =  (int) $bool_false ;
var_dump($int_val); //Output will be 0

$bool_true = true;
$int_val =  (int) $bool_true ;
var_dump($int_val); //Output will be 1
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we will convert resource data type to an integer then it will return unique resource ID. For example
```
<?php
$fp = fopen("filename.txt", "w");
$int_cast = (int) $fp;
var_dump($int_cast);
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we will cast float number to an integer then the output will be the number before the decimal. Means if we will cast 10.9 to an integer then the output will be 10.
<?php
$float_num = 10.9;
echo (int) $float_num;
?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conversion from string to number is quite complected and also used rarely. For the complete conversion list you can refer http://php.net/manual/en/language.types.string.php#language.types.string.conversion.

**PHP type casting to Boolean**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can cast any variable to Boolean using (bool) or (boolean) keyword.  If we will convert any variable data type to Boolean then if the variable has value(and value is not 0) then it will return true, otherwise false.
```
<?php
var_dump((bool) 1); //return true
var_dump((bool) 0);//return false
var_dump((bool) "");//return false
var_dump((bool) , "ank");//return true
?>
```
**PHP type casting to Float**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Except for the string, all float casting first go through integer casting then converted into the float. If we will convert an object to float then notice will be thrown in PHP 5.
PHP type casting to string<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can convert any data type to string using (string). String conversion automatically happens in the scope where it needed.  In the most of the cases value not changed. But for boolean false converted into “” and true in “1”. Below is the example
```
<?php
$boo_true = true;
var_dump((string) $boo_true);// Output will be "1"
var_dump((string) false) ;//Output will be ""
var_dump((string) 1);//output will be 1
?>
```
**PHP type casting to array**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can convert any data type variable in an array using the (array)  keyword. Any scalar data type conversion into the array will create an array and add the element at 0th index. For example:
```
<?php
var_dump((array) , 5);// value 5 in the array with 0th index
var_dump((array) NULL);// Will be empty array
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usually, we use array conversion in case of the object. All public property will convert to the key value format.
