<?php

$k=trim(fgets(STDIN, 1024));  //number of mediums
$l=trim(fgets(STDIN, 1024));  //length of each medium
$h=trim(fgets(STDIN, 1024));  //height of ball
$d=trim(fgets(STDIN, 1024));  //distance travelled for each step

echo "enter value for ".$k."mediums:";
//sets the array to k mediums
$kq = new SplFixedArray($k);
//takes values of mediums
for( $i=0;$i<$k;$i++ )
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
echo "distance traveled by ball is $d1\n";

?>