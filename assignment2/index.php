<?php
   $exampleString = "My Name is Bilal..";
   function findLength($str){
      $lastChar = substr($str,-1);
      $length = strrpos($str,$lastChar);
      return $length+1;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Assignment 2</title>
</head>
<body>
   <!-- These are CORE PHP functions -->
   <h1>Words Count: <font color="red"><?php echo str_word_count($exampleString) ?></font></h1>
   <h1>String Reverse: <font color="red"><?php echo strrev($exampleString) ?></font></h1>
   <h1>Position(index) of "Bilal": <font color="red"><?php echo strpos($exampleString, "Bilal") ?></font></h1>
   <h1>Replace Bilal with "Khan": <font color="red"><?php echo str_replace("Bilal","Khan",$exampleString) ?></font></h1>
   <h1>Shuffuling the String: <font color="red"><?php echo str_shuffle($exampleString) ?></font></h1>
   <h1>Lowercase the String: <font color="red"><?php echo strtolower($exampleString) ?></font></h1>
   <!--This is User Define Function-->
   <h1>Length: <font color="red"><?php echo findLength($exampleString) ?></font></h1>
</body>
</html>