 <?php 
/*PHP program to use serialization for getting a series of natural numbers

Input
enter the nth term:5

Output
serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;} 
*/
$msg="enter the nth term:";
echo $msg;
$s= trim(fgets(STDIN, 1024));
//stores the n numbers in the array
for( $i = 1; $i<=$s; $i++ )
 $array[$i]=$i;
$x = serialize($array); 
//prints the data
echo "serialized numbers:";
echo  $x;  

?>  
