<?php
/*PHP program to find the percentage of a student for input given in following manner
3
rag 78 56 72
teja 83 67 78
bhavana 83 75 67
bhavana
output: 75

Input
enter number of students:4
enter the details of students:
bhavana 45 89 98
rag 56 89 74
teja 78 89 99
niha 96 66 85
Enter student for percentage:rag

Output
percentage of rag is 73
*/
$msg="enter number of students:";
echo $msg;
//takes the value of number of students
$n=trim(fgets(STDIN, 1024));
echo "enter the details of students:\n";
//loop continues till the number of students given
//name and values are take in the form of string and then converts in to array using explode function
for($i=0;$i<$n;$i++)
{
  $q=trim(fgets(STDIN, 1024));
  $q=explode(" ",$q);
  //the complete marks is taken in to an other marks
  $marks[$i]=$q;
}
echo "Enter student for percentage:";
//takes input of the person to know the marks
$st=trim(fgets(STDIN, 1024));
//verifies all the names that are present in the marks of marks first index
for($i=0;$i<$n;$i++)
{
 if($st==$marks[$i][0])
 {
  //calculates the percentage of the person
  $sum=($marks[$i][1]+$marks[$i][2]+$marks[$i][3])/3;
  echo "percentage of $st is $sum\n";
  break;
 }
}

?>