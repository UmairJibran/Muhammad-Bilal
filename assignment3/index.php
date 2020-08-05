<?php
   //Question 1
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
   echo "<br><br><br>";
   //Question 2
   $fruits = array("Mangoes", "Straberries", "Bananas", "Apples", "Oranges");
   print_r($fruits);
   echo "<br>";
   echo "Fruit 1 = " . $fruits[0];
   echo "<br>";
   echo "Fruit 2 = " . $fruits[1];
   echo "<br>";
   echo "Fruit 3 = " . $fruits[2];
   echo "<br>";
   echo "Fruit 4 = " . $fruits[3];
   echo "<br>";
   echo "Fruit 5 = " . $fruits[4];
   echo "<br><br><br>";
   //Question 3
   $cities = array("Paris","London","New York","Islamabad","Peshawar","Washington");
   array_push($cities, "Lyon", "Berlin","Palermo");
   print_r($cities);
?>