<?php
/*PHP program to use the mobile phone class as parent and build the accessory class for a shop for biling purpose.

Input
enter screen size:5
enter ram:3
enter company name:moto
enter processor:3
do u want screenguard enter 1 if yes enter 0 if no:1
do u want pouch enter 1 if yes enter 0 if no:0
do u want headset enter 1 if yes enter 0 if no:1

Output
total cost of your moto with accesories:44692
*/
class Mobile {
 var $screen_size;
 var $ram;
 var $company;
 var $processor;
 var $ss;
 var $r;
 var $pr;
 var $proc;
 //initializes the value of screensize,ram,company and processor
 function Mobile($screen_size,$ram,$company,$processor)
 {     
  $this->screen_size=$screen_size;
  $this->ram = $ram;
  $this->processor=$processor;
  $this->company =$company;
 }
 //calculates the price of the mobile according to the features
 function set_price()
 {
   $s=$this->screen_size;
   $r=$this->ram;
   $pr1=$this->company;
   $proc=$this->processor;
   //converts the company name to lower case
   $pr=strtolower($pr1);
   //this block gets executed if the user enters the valid company i.e available in our catalog
   if($pr=="samsung" || $pr=="moto" || $pr=="lenovo" || $pr=="nokia" )
   {
    if($pr=="samsung")
     {
      $cost=7000*($s/4.0)+7000*($r/1.0)+7000*($proc/1.0)+0.05*7000;
     }
     elseif($pr=="moto")
     {
      $cost=5999*($s/4.0)+5999*($r/1.0)+5999*($proc/1.0)+0.05*5999;
     }
     elseif($pr=="lenovo")
     {
      $cost=4000*($s/4.0)+4000*($r/1.0)+4000*($proc/1.0)+0.05*4000;
     }
     elseif($pr=="nokia")
     {
      $cost=6100*($s/4.0)+6100*($r/1.0)+6100*($proc/1.0)+0.05*6100;
     }
     return (int)$cost;
    }
    else
      echo "enter a valid company\n";
   }      
  }

//extends the parent class
class Bill extends Mobile
{
 var $screen_guard;
 var $pouch;
 var $head_set;
 function Bill($screen_size,$ram,$company,$processor,$screen_guard,$pouch,$head_set)
 { 
  //inherits the values of the parent class
  parent::__construct($screen_size,$ram,$company,$processor);
  $this->screen_guard=$screen_guard;
  $this->pouch = $pouch;
  $this->head_set=$head_set;       
 }
 function set_bill()
 {
	$sg=$this->screen_guard;
  $p=$this->pouch ;
  $hs=$this->head_set;
  //calls the setprice function in parent class
  $cost1=$this->set_price();
  //calculates the price of the requirements
  $cost2=$sg*200+$p*300+$hs*700;
  echo "total cost of your ". $this->company. " with accesories:".(int)($cost1+$cost2)."\n";       
  }
}
//enters all the details of requires features
echo "enter screen size:";
$ss = trim(fgets(STDIN, 1024));
echo "enter ram:";
$rr = trim(fgets(STDIN, 1024));
echo "enter company name:";
$cc = trim(fgets(STDIN, 1024));
echo "enter processor:";
$pp = trim(fgets(STDIN, 1024));
echo "do u want screenguard enter 1 if yes enter 0 if no:";
$sg = trim(fgets(STDIN, 1024));
echo "do u want pouch enter 1 if yes enter 0 if no:";
$po = trim(fgets(STDIN, 1024));
echo "do u want headset enter 1 if yes enter 0 if no:";
$hs = trim(fgets(STDIN, 1024));
//calls the sub class constructor
$mobile1=new Bill($ss,$rr,$cc,$pp,$sg,$po,$hs);
//calls the bill compute function
$mobile1->set_bill();
?>