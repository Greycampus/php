<?php

$msg="enter percentage of the student:";
echo $msg;
//takes percentage of the student
$a=fgets(STDIN, 1024);
//trim function avoids the whitespaces
$a=trim($a);
//if percentage is greater than 85 grade A
if($a>85)
	echo "GRADE- A\n";
//if percentage is between 85 and 80 grade A-
elseif($a<=85 && $a>80)
	echo "GRADE- A-\n";
//if percentage is between 80 and 70 grade B
elseif($a<=80 && $a>70)
	echo "GRADE- B\n";
//if percentage is between 70 and 60 grade C
elseif($a<=70 && $a>60)
	echo "GRADE- C\n";
//if percentage is between 60 and 40 grade D
elseif($a<=60 && $a>40)
	echo "GRADE- D\n";
//if percentage is between 40 and 35 grade E
elseif($a<=40 && $a>35)
	echo "GRADE- E\n";
//if percentage is less than 35 then grade E and student failed
else
	echo "GRADE- E and Student failed\n";

?>