<?php

   //session_start function first checks if a session is already started and if none is started then it starts one
   session_start();  
   //isset determines, if a variable is set and is not null 
   if( isset( $_SESSION['count'] ) ) 
   {
      $_SESSION['count'] += 1;
   }
   else
   {
      $_SESSION['count'] = 1;
   }

   echo "You have visited this page ". $_SESSION['count']." in this session\n" ;

?>