 <?php 

echo "enter the nth term:";
$s= trim(fgets(STDIN, 1024));
$l=$s+1;
$array = new SplFixedArray($l);
//stores the n numbers in the array
for( $i = 1; $i<=$s; $i++ )
 {
    $array[$i]=$i;
 }
$serialized_data = serialize($array);  
//prints the data
echo "serialized numbers:";
echo  $serialized_data."\n";  
 
 ?>  
