<?php
/*PHP program to initialize a hash or dictionary with five key->value sets and print the second the key->value pair

Output
2->php
*/
//takes input in the form of key->value pair
 $b = array(array(1,"ruby"), array(2,"php"), array(3,"c"), array(4,"c++"), array(5,"python") );
 //displays the second key->value pair
 echo $b[1][0]."->".$b[1][1]."\n";

?>