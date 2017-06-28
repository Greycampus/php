<?php

$msg="enter the secret number for the game:";
echo $msg;
//takes the secret number which contains 4 digits
$sec=fgets(STDIN, 1024);
$sec=trim($sec);
echo "player have three chances, enter 4 digit number (range 1-6):\n";
//have three chances for the user, so loop iterates for three times
for($i=0;$i<3;$i++)
{
    //takes the guess one by one
    $g=trim(fgets(STDIN, 1024));
    //if both the array matches, then the user won
    if($sec==$g)
    {
        echo "You Won..\n";
        return 0;
    }
    //this block gets executed when, the secret number and the guess not matches 
    else
    {
        //loop runs for all the digits in the guess number
        for($j=0;$j<4;$j++)
        {
            //the digit that is entering in the loop is stored in the variable
            $sam=$g[$j];
            //strpos is the function, that return the position of a particular character in the string
            $pos = strpos($sec, $sam);
            //if the digit is not present in the secret number and the i th index value of both secret number and guess is not same then - is stored in the array
            //which indicates that, the digit is present but not at the correct position 
            if($pos!==false && $sec[$j]!=$g[$j] )
                $arr[$j]="-";
            // if the i th index valuef both secret number and guess is same then + is stored in the array
            elseif($sec[$j]==$g[$j])
             {
                $arr[$j]="+";
             }
             //if none of the above conditions satisfy, then null is stored
             else
                $arr[$j]=" ";
        }
        //displays the array
        for($k=0;$k<4;$k++)
        {
            echo $arr[$k];
        }
        
      echo "\nTry again\n";
      //moves to the next guess
    }
}
//if your are failed, then this statement gets executed
echo "Better luck next time\n";

?>