 <?php 

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
