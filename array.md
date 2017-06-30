### Array:

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers then instead of defining 100 variables its easy to define an array of 100 length.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are three different kind of arrays and each array value is accessed using an ID which is called array index.
- Indexed array − An array with a numeric index. Values are stored and accessed in linear way.
- Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.
- Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices.

**PHP Indexed Array**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP index is represented by number which starts from 0. We can store number, string and object in the PHP array. All PHP array elements are assigned to an index number by default.
There are two ways to define indexed array:<br/>
1st way:<br/>
  ``` $season=array("summer","winter","spring","autumn"); ```
  
2nd way:<br/>
```
  $season[0]="summer";  
  $season[1]="winter";  
  $season[2]="spring";  
  $season[3]="autumn";  
  ```
Example:
```
 <?php  
 $season=array("summer","winter","spring","autumn");  
 echo "Season are: $season[0], $season[1], $season[2] and $season[3]";
 ?>  
 ```
Output:<br/>
```Season are: summer, winter, spring and autumn ```<br/>
Example:2
```
<?php  
$season[0]="summer";  
$season[1]="winter";  
$season[2]="spring";  
$season[3]="autumn";  
echo "Season are: $season[0], $season[1], $season[2] and $season[3]"; 
?> 
```
Output:
```Season are: summer, winter, spring and autumn ```

**PHP Associative Array**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can associate name with each array elements in PHP using => symbol.
There are two ways to define associative array:<br/>
1st way:
``` $salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");  ```
2nd way:
```
 $salary["Sonoo"]="350000";  
 $salary["John"]="450000";  
 $salary["Kartik"]="200000";  
```
Example:
```
<?php    
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    
echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
echo "John salary: ".$salary["John"]."<br/>";  
echo "Kartik salary: ".$salary["Kartik"]."<br/>";  
?>  
```
Output:
```
Sonoo salary: 350000
John salary: 450000
Kartik salary: 200000
```
Example:
```
 <?php    
 $salary["Sonoo"]="350000";    
 $salary["John"]="450000";    
 $salary["Kartik"]="200000";    
 echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
 echo "John salary: ".$salary["John"]."<br/>";  
 echo "Kartik salary: ".$salary["Kartik"]."<br/>";  
 ?>
 ```
Output:
```
Sonoo salary: 350000
John salary: 450000
Kartik salary: 200000
```
**PHP Multidimensional Array**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP multidimensional array is also known as array of arrays. It allows you to store tabular data in an array. PHP multidimensional array can be represented in the form of matrix which is represented by row * column.
```
 $emp = array  
   (  
   array(1,"sonoo",400000),  
   array(2,"john",500000),  
   array(3,"rahul",300000)  
   );  
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A multi-dimensional array each element in the main array can also be an array. And each element in the sub-array can be an array, and so on. Values in the multi-dimensional array are accessed using multiple index.<br/>
Example:
```
<?php    
$emp = array  
  (  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  
?>  
```
Output:
```
sonoo 400000 
john 500000 
rahul 300000
```
**PHP Array Functions**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP provides various array functions to access and manipulate the elements of array. The important PHP array functions are given below.
1. PHP array() function<br/>
&nbsp;&nbsp;&nbsp;PHP array() function creates and returns an array. It allows you to create indexed, associative and multidimensional arrays.<br/>
Syntax<br/>
```array array ([ mixed $... ] ) ``` 
2. PHP array_change_key_case() function<br/>
&nbsp;&nbsp;&nbsp;PHP array_change_key_case() function changes the case of all key of an array.
Note: It changes case of key only.<br/>
Syntax<br/>
```array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )```  
3. PHP array_chunk() function<br/>
&nbsp;&nbsp;&nbsp;PHP array_chunk() function splits array into chunks. By using array_chunk() method, you can divide array into many parts.<br/>
Syntax<br/>
```array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] ) ``` 
4. PHP count() function<br/>
&nbsp;&nbsp;&nbsp;PHP count() function counts all elements in an array.<br/>
Syntax<br/>
```int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) ``` 
5. PHP sort() function<br/>
&nbsp;&nbsp;&nbsp;PHP sort() function sorts all the elements in an array.<br/>
Syntax<br/>
```bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) ``` 
6. PHP array_reverse() function<br/>
&nbsp;&nbsp;&nbsp;PHP array_reverse() function returns an array containing elements in reversed order.<br/>
Syntax<br/>
```array array_reverse ( array $array [, bool $preserve_keys = false ] ) ``` 
7. PHP array_search() function<br/>
&nbsp;&nbsp;&nbsp;PHP array_search() function searches the specified value in an array. It returns key if search is successful.<br/>
Syntax<br/>
```mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] ) ``` 
8. PHP array_intersect() function<br/>
&nbsp;&nbsp;&nbsp;PHP array_intersect() function returns the intersection of two array. In other words, it returns the matching elements of two array.<br/>
Syntax<br/>
```array array_intersect ( array $array1 , array $array2 [, array $... ] )```

