<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Assignment 6</title>
   </head>
   <body>
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <br><br><label for="name">Name: </label>
         <input type="text" name="name" id="name" placeholder="Please Enter your Name">
         <br><br><label for="email">Email: </label>
         <input type="email" name="email" id="email" placeholder="Please Enter your Email">
         <br><br><label for="number">Mobile Number: </label>
         <input type="number" name="number" id="number" placeholder="Please Enter your Mobile Number">
         <br><br><label for="password">Password: </label>
         <input type="password" name="password" id="password" placeholder="*********">
         <br><br><label for="gender">Gender: </label>
         <input type="radio" id="gender-male" name="gender"><label for="gender-male">Male</label>
         <input type="radio" id="gender-female" name="gender"><label for="gender-female">Female</label>
         <br><br><input type="submit" name="validate" value="Validate">
      </form>
   </body>
</html>

<?php

   function stripField($param){
      return htmlspecialchars(trim(strip_tags(stripslashes($param))));
   }

   $name = "";
   $email = "";
   $number = "";
   $password = "";
   $gender = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = stripField($_POST["name"]);
      $email = stripField($_POST["email"]);
      $password = stripField($_POST["password"]);
      $number = stripField($_POST["number"]);
      $gender = stripField($_POST["gender"]);
   }
?>