<?php

$msg= "enter pyramid height:";
echo $msg;
$num = trim(fgets(STDIN, 1024));
//as we use only one variable i.e i
//power of 10 -1 = largest number in its digit space
//e.g 1000-1=999 =>999/9=111
for($i=0;$i<$num;$i++)
{
	$p=(10**($i+1)-1)/9;
	 echo $p."\n";
}

?>