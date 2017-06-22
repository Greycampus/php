<?php

function soe($n,$prime)
{
    $p = 2;
    //calculates the power of 2
    while($p*$p<=$n)
    {
        if($prime[$p] ==True)
        {
            $i=$p*2;
            //sets all the powers of 2 to false
            while($i<=$n)
            {
                $prime[$i] = False;
                $i = $i+$p;
            }
        }
        $p+=1;
    }
    //returns the prime array
    return $prime;
}

function mp($n)
{
    //sets all the values of prime array to true
    for($i=0;$i<$n+1;$i++)
    {
        $prime[$i]=True;
    }
    //calls another function
    $prime = soe($n,$prime);
    $k = 2;
    //to check the numbers that are absolute difference with powers of 2
    while ((1<<$k)-1<=$n && (1<<$k)+1<=$n)
    {
        $num = (1<<$k)-1;
        //if value is true, displays the number
        if($prime[$num])
            echo $num."\n";
        $num = (1<<$k)+1;
        //if value is true, displays the number
        if($prime[$num])
            echo $num."\n";
        $k = $k+1;
    }
}

echo "enter the number:";
//takes input of a number to display range of the number from 0 to n
$n=trim(fgets(STDIN, 1024));
echo "primes that are exactly at absolute difference of 1 with powers of 2 are:\n";
//calls the function
mp($n);

?>