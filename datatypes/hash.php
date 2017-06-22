<?php

//takes input in the form of key->value pair
 $course = array
  (
  array(1,"ruby"),
  array(2,"php"),
  array(3,"c"),
  array(4,"c++"),
  array(5,"python")
  );
 //displays the second key->value pair
 echo $course[1][0]." ".$course[1][1]."\n";

?>