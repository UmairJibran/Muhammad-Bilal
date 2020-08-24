<?php
   require_once("./connection.php");
   if(isset($_POST['add'])){
      $name = $_POST['name'];
      $sql = "INSERT INTO `tbl_cs` (`name`) VALUES ('${name}')";
      $result = $conn->query($sql);
   }elseif(isset($_POST['update'])){
      $name = $_POST['name'];     
      $id = $_POST['id'];     
      $sql =  "UPDATE `tbl_cs` SET `name` = '${name}' WHERE `tbl_cs`.`id` = ${id};";
      $result = $conn->query($sql);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Week 8</title>
</head>
<body>
   <form action="#" method="post">
      <input type="text" name="name" placeholder="Enter your name" required>
      <input type="submit" name="add" value="Add">
   </form>
   <form action="#" method="post">
      <input type="text" name="name" placeholder="Enter new name" required>
      <input type="number" name="id" placeholder="Enter ID to update Name" required>
      <input type="submit" name="update" value="Update">
   </form>
</body>
</html>