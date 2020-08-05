<?php
   function calculateFactorial($number){
      if($number < 0) {
         return "Please Enter a postive number<br>";
      }elseif($number == 0 OR $number == 1){
         return 1 . "<br>";
      }else{
         $factorial = 1;
         for($i = $number ; $i > 0 ; $i--){
            $factorial = $factorial * $i;
         }
         return $factorial . "<br>";
      }
   }
   echo calculateFactorial(0);
   echo calculateFactorial(1);
   echo calculateFactorial(2);
   echo calculateFactorial(3);
   echo calculateFactorial(4);
   echo calculateFactorial(5);
   echo calculateFactorial(-1);
   echo calculateFactorial(-20);
?>