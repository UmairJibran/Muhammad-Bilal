<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Uploading a file</title>
</head>
<body>
   <form action="#" method="post" enctype="multipart/form-data">
      <label>Please Choose a file to upload</label>
      <input type="file" name='fileToUpload' required>
      <input type="submit" value="Upload" name="upload">
   </form>
</body>
</html>
<?php
   if(isset($_POST['upload'])){
      $file = $_FILES['fileToUpload'];
      $fileName = $file['name'];
      $fileTempName = $file['tmp_name'];
      $fileSize = $file['size'];
      $fileError = $file['error'];
      $fileType = $file['type'];
      $fileExt = explode('.',$fileName);
      $fileActulaExtension = strtolower(end($fileExt));
      if($fileError === 0){
         if($fileSize < 500000){
            $fileNameNew = uniqid('',true) . '.' . $fileActulaExtension;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTempName,$fileDestination);
            echo 'File Uploaded';
         }else{
            echo 'Your File was tooo big<br>';
         }
      }else{
         echo "There was an error uploading the File<br>";
      }
   }
?>