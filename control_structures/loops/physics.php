<?php

echo "enter total number of mediums:";
$k=trim(fgets(STDIN, 1024)); 
echo "enter length of medium:";  
$l=trim(fgets(STDIN, 1024));
echo "enter height from which ball is thrown:";  
$h=trim(fgets(STDIN, 1024)); 
echo "enter distance travelled in each step:"; 
$d=trim(fgets(STDIN, 1024));  
echo "enter value for ".$k." mediums:";
//takes values of mediums
for( $i=0; $i<$k; $i++)
 {
    $kq[$i]=trim(fgets(STDIN, 1024));
 }
$h1 = $h;
$d1 = 0;
while($h1!=0)
{
    $fl = $k*$l;
    for($i=0;$i<$k;$i++)
    { //for medium check
        if ($h1!=0)
        { //height not equal to zero
            $tt = $d1%$fl; //medium repeatition check
            $d1=$d1+$d; //distance increament per step
            $h1 = $h1*(1-$kq[$tt/$l]);
            $h1=(int)$h1; //converts the value to int
        }
    }
}
echo "distance travelled by the ball is $d1\n";

?>