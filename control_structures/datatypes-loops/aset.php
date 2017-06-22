<?php

echo "enter list of your choice with repetition:";
$str = trim(fgets(STDIN, 1024));
$input=explode(" ",$str);
$result = array_unique($input);
print_r($result);
?>
