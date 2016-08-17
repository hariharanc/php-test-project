<?php
 
// Path to move uploaded files
$target_path = "/opt/lampp/htdocs/uplods/uploadimage";
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$uploadfile = $target_path . basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
{
  echo "The file has been uploaded successfully";
}
else
{
  echo "There was an error uploading the file";
}
}
?>
