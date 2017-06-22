<?php
   class Mobile {
      var $screen_size;
      var $ram;
      var $company;
      var $processor;
      var $ss;
      var $r;
      var $pr;
      var $proc;

      function Mobile($screen_size,$ram,$processor,$company)
      {
        
         $this->screen_size=$screen_size;
         $this->ram = $ram;
         $this->processor=$processor;
         $this->company =$company;

      }
      
      function set_price()
      {
         
         $s=$this->screen_size;
         $r=$this->ram;
         $proc=$this->processor;
         $pr1=$this->company;
         $pr=strtolower($pr1);
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
           echo "price:".$cost;
          }
          else
            echo "enter a valid company\n";
      }
      
   }
   echo "enter screen size:";
   $ss = trim(fgets(STDIN, 1024));
   echo "enter ram:";
   $rr = trim(fgets(STDIN, 1024));
   echo "enter processor:";
   $pp = trim(fgets(STDIN, 1024));
   echo "enter company name:";
   $cc = trim(fgets(STDIN, 1024));
   $mobile1=new Mobile($ss,$rr,$pp,$cc);
   $mobile1->set_price();
   
    
?>