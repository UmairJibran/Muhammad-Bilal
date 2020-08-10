<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Set Cookie</title>
</head>
<body>
   <form action="#" method="post">
      <label for="userName">Enter UserName</label>
      <input type="text" name="userName" id="userName">
      <input type="submit" name="update" value="Check Cookie">
   </form>
</body>
</html>

<?php
   if(isset($_POST["update"])){
      $username = $_POST["userName"];
      //setting Cookie
      setcookie("username", $username, time()+60*60*24); 
      /*
         //*first Parameter is the name of the cookie
         //*second parameter is the the value of the cookie
         //*the third parameter is the lifetime
      */
      header("location:./checkCookie.php");
   }
?>