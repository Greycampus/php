<?php
/*PHP program to use Function Overriding in a class

Output
B's hello
A's good bye
*/
class A
{
 #constructor of A
 function A()
 {
  $x=1;
 }
#m1 function of parent
 function m1($Ab)
 {
  echo "A's ".$Ab."\n";
 }
}
class B extends A 
{
 #constructor of B
 function B()
 {
   $y=1;
 }
 #m1 function of child
 # print("m1 from B")
 function m1($Ab)
 {
  echo "B's ".$Ab."\n";
 }   
}
$c=new B();
$d=new A();
#c.m1() prints hello from B
$c->m1("hello");
$d->m1("good bye");

?>