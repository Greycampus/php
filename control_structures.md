### 6. Control structures:

#### 6.1. Decision making:


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any PHP script is built out of a series of statements. A statement can be an assignment, a function call, a loop, a conditional statement of even a statement that does nothing (an empty statement). Statements usually end with a semicolon. In addition, statements can be grouped into a statement-group by encapsulating a group of statements with curly braces. A statement-group is a statement by itself as well.

1. If Statement
2. Else Statement
3. Elseif Statement
4. Switch Statement

**If Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An if statement is a way of controlling the execution of a statement that follows it (that is, a single statement or a block of code inside braces). The if statement evaluates an expression between parentheses. If this expression results in a true value, the statement is executed. Otherwise, the statement is skipped entirely. This enables scripts to make decisions based on any number of factors:

Syntax:-<br/>
```
if ( expression ) {
// code to execute if the expression evaluates to true }
```
PHP Example:- The following code would display a is bigger than b if $a is bigger than $b:
```
<?php
if ($a > $b)
   echo "a is bigger than b"; ?>
```

**Else Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When working with the if statement, you will often want to define an alternative block of code that should be executed if the expression you are testing evaluates to false. You can do this by adding else to the if statement followed by a further block of code:

Syntax:-<br/>
```
if ( expression ) {
// code to execute if the expression evaluates to true
} else {
// code to execute in all other cases
}
```
PHP Example:- The following code would display a is bigger than b if $a is bigger than $b, and a is NOT bigger than b otherwise:
```
<?php
if ($a > $b) {
   echo "a is bigger than b";
} else {
    echo "a is NOT bigger than b";
}
?>
```
The else statement is only executed if the if expression evaluated to FALSE.

**Elseif Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As its name suggests, is a combination of if and else. Like else, it extends an if statement to execute a different statement in case the original if expression evaluates to FALSE. However, unlike else, it will execute that alternative expression only if the elseif conditional expression evaluates to TRUE.

Syntax:-</br>
```
if ( expression ) {
// code to execute if the expression evaluates to true
} elseif (another expression) {
// code to execute if the previous expression failed
// and this one evaluates to true
} else { // code to execute in all other cases
}
```
PHP Example:- The following code would display a is bigger than b, a equal to b or a is smaller than b:
```
<?php
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
?>
```

**Switch Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The switch statement is similar to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.

Syntax:-</br>
```
switch ( expression ) {
case result1:
// execute this if expression results in result1
break;
case result2:
// execute this if expression results in result2
break;
default:
// execute this if no break statement
// has been encountered hitherto
}
```
PHP Example:-
```
<?php
switch ($i) {
    case 0:
       echo "i equals 0";
    case 1:
        echo "i equals 1";
    case 2:
        echo "i equals 2";
}
?>
```

#### 6.2. Loops

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.<br/>
In PHP, we have the following looping statements:
 - while - loops through a block of code as long as the specified condition is true 
 - do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true 
 - for - loops through a block of code a specified number of times 
 - foreach - loops through a block of code for each element in an array 
 
**While Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;While loops are the simplest type of loop in PHP. They behave just like their C counterparts. The basic form of a while statement is:

Syntax:-
```
while ( expression ) {
// do something }
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The meaning of a while statement is simple. It tells PHP to execute the nested statement(s) repeatedly, as long as the while expression evaluates to TRUE. The value of the expression is checked each time at the beginning of the loop, so even if this value changes during the execution of the nested statement(s), execution will not stop until the end of the iteration (each time PHP runs the statements in the loop is one iteration). Sometimes, if the while expression evaluates to FALSE from the very beginning, the nested statement(s) won't even be run once.

PHP Example: The following code are identical, and both print numbers from 1 to 10:
```
<?php
$i = 1;
while ($i <= 10) {
echo $i;  
$i++;
}
```

**Do.. While Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do..while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning. The main difference from regular while loops is that the first iteration of a do..while loop is guaranteed to run (the truth expression is only checked at the end of the iteration), whereas it's may not necessarily run with a regular while loop (the truth expression is checked at the beginning of each iteration, if it evaluates to FALSE right from the beginning, the loop execution would end immediately).

Syntax:-
```
do {
// code to be executed
} while ( expression );
```
PHP Example:- The code block is executed a minimum of one time.:
```
<?php
$num = 1;
do {
 echo"Execution number: $num<br>\n";
$num++;
} while ( $num > 200 && $num < 400 );
?>
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The do...while statement tests whether the variable $num contains a value that is greater than 200 and less than 400. In line 7, we have initialized $num to 1, so this expression returns false. Nonetheless, the code block is executed before the expression is evaluated, so the statement will print a single line to the browser.


**For Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For loops are the most complex loops in PHP. They behave like their C counterparts. The syntax of a for loop is:.

Syntax:-
```
for ( initialization expr1; test expr2; modification expr3 )
{ // code to be executed }
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The first expression (expr1) is evaluated (executed) once unconditionally at the beginning of the loop.</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the beginning of each iteration, expr2 is evaluated. If it evaluates to TRUE, the loop continues and the nested statement(s) are executed. If it evaluates to FALSE, the execution of the loop ends.At the end of each iteration, expr3 is evaluated (executed).</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each of the expressions can be empty. expr2 being empty means the loop should be run indefinitely (PHP implicitly considers it as TRUE, like C). This may not be as useless as you might think, since often you'd want to end the loop using a conditional break statement instead of using the for truth expression.

PHP Example:- All of them display numbers from 1 to 10:
```
<?php
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
```

**Foreach Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP 4 (not PHP 3) includes a foreach construct, much like Perl and some other languages. This simply gives an easy way to iterate over arrays. foreach works only on arrays, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable. There are two syntaxes; the second is a minor but useful extension of the first:

Syntax:-
```
foreach (array_expression as $value) statement
foreach (array_expression as $key => $value) statement
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The first form loops over the array given by array_expression. On each loop, the value of the current element is assigned to $value and the internal array pointer is advanced by one (so on the next loop, you'll be looking at the next element).<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The second form does the same thing, except that the current element's key will be assigned to the variable $key on each loop.

**Break Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Break ends execution of the current for, foreach, while, do..while or switch structure. Break accepts an optional numeric argument which tells it how many nested enclosing structures are to be broken out of.

PHP Example:-
```
<?php
echo "<p><b>Example of using the Break statement:</b></p>";

for ($i=0; $i<=10; $i++) {
   if ($i==3){break;} 
   echo "The number is ".$i;
   echo "<br />";
}
?>
```

**Continue Statement**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Continue is used within looping structures to skip the rest of the current loop iteration and continue execution at the beginning of the next iteration.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Continue accepts an optional numeric argument which tells it how many levels of enclosing loops it should skip to the end of.

PHP Example:-
```
<?php
echo "<p><b>Example of using the Continue statement:</b><p>";

for ($i=0; $i<=10; $i++) {
   if (i==3){continue;} 
   echo "The number is ".$i; 
   echo "<br />";
}
?> 
```

