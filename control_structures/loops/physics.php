<?php
/*In physics, contact between objects during a collision leads to loss of force as no medium is perfect.
likely we are having n medium in a plane each of equal length followed by qouitient of reduction, In can be well
explained using the following example
person throws a ball on plane from certain height h of n medium your job is to find distance traveled in plane
and the medium is repetted in cyclic order and height is only considered in integers
input:
3(number of medium)
4(length of each)
5(height from which ball is thrown)
2(distance travelled for each step)
0.1
0.3
0.5
output:
first  step 5*0.9= 4 dist = 2
second step 4*0.9= 3 dist = 4
third  step 3*0.7= 2 dist = 6
fouth  step 2*0.7= 1 dist = 8
fifth  step 1*0.5= 0 dist = 10
so,the result is 10(ten) steps

Input
enter total number of mediums:3
enter length of medium:4
enter height from which ball is thrown:8
enter distance travelled in each step:5
enter value for 3 mediums:0.2
0.3
0.5

Output
distance travelled by the ball is 25

  */
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
 $kq[$i]=trim(fgets(STDIN, 1024));
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