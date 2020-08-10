<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Set Session</title>
</head>
<body>
   <form action="#" method="post">
      <label for="userName">Enter UserName</label>
      <input type="text" name="userName" id="userName">
      <input type="submit" name="update" value="Check Session">
   </form>
</body>
</html>

<?php
   if(isset($_POST['update'])){
      $userName = $_POST['userName'];
      $_SESSION['userName'] = $userName;
      header("Location:./checkSession.php");
   }
?>