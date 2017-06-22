<?php

echo "Enter percentage of the student:";
//takes percentage of the student
$per=trim(fgets(STDIN, 1024));
//if percentage is greater than 85 grade A
if($per>85)
	echo "GRADE- A\n";
//if percentage is between 85 and 80 grade A-
elseif($per<=85 && $per>80)
	echo "GRADE- A-\n";
//if percentage is between 80 and 70 grade B
elseif($per<=80 && $per>70)
	echo "GRADE- B\n";
//if percentage is between 70 and 60 grade C
elseif($per<=70 && $per>60)
	echo "GRADE- C\n";
//if percentage is between 60 and 40 grade D
elseif($per<=60 && $per>40)
	echo "GRADE- D\n";
//if percentage is between 40 and 35 grade E
elseif($per<=40 && $per>35)
	echo "GRADE- E\n";
//if percentage is less than 35 then grade E and student failed
else
	echo "GRADE- E and Student failed\n";

?>