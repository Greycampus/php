<?php
/*PHP program to implement a ceaser cipher in a class by inhereting texts from a parent class

Input
enter the text to encrypted:encrypted12345
enter shift for cisear cipher:3

Output
entered plain text:encrypted12345
cipher text is hqfubswhg45678
*/
class cipher
{
  function Cipher($tst,$sh)
  {
	$this->tst=$tst;
  }
}

class icipher extends cipher{
 #inheriting cipher
 #constructor
 function icipher($tst,$sh)
 {
  parent::__construct($tst,$sh);
  $this->sh = $sh;
 }
 function encrypt()
 {
  $tst=$this->tst;
  echo "entered plain text:$tst\n";
  $csr=strtolower($tst);
  $cc="";
  for($i=0;$i<strlen($tst);$i++)
  {
   if(ord($csr[$i])>122-($this->sh%26)){
   #after checking if the ord value may exceed the ascii alphabet range
   #eg: shift = 5 ,for z =>122-26+5%26 => gives 101 i.e., e
   $cc =$cc.chr(ord($csr[$i])-26+$this->sh%26);
  }
  #finding whether the text has numbers       
  elseif(preg_match('[\d]', $csr[$i]))
  {# can also be done by (ord(csr[i])>=48 and ord(csr[i])<=57)
   #checking for ord value exceeding the numbers limit
   if(ord($csr[$i])>57-($this->sh%10))
   #eg: for 9 , shift = 3 => 57 -10+3%10 = >50 i.e., 2
    $cc =$cc.chr(ord($csr[$i])-10+$this->sh%10);
   else
    #simply adding the shift as it will not exceed the limits
    $cc= $cc.chr(ord($csr[$i])+(int)($this->sh%10));
   }
   else
    #simply adding the shift as it wll not exceed the limits
    $cc= $cc.chr(ord($csr[$i])+(int)($this->sh%26));    
   }
   echo "cipher text is ".$cc."\n";
  }
 }
echo "enter the text to encrypted:";
//takes the input of a string
$tst=trim(fgets(STDIN, 1024));
$tst=strtolower($tst);
echo "enter shift for cisear cipher:";
//takes a key value
$sh=trim(fgets(STDIN, 1024));
$k = new icipher($tst,$sh);
$k->encrypt();

?>