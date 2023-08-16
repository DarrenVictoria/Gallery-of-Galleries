<?php
$session = "localhost";
$username = "id21049122_galleryofgalleriesadmin";
$password = "Gallery#of@Galleries%2023";
$database_name = "id21049122_adminlogin";  //this shoul equalent to database name otherwise it woulnt work

$connection = new mysqli($session, $username, $password, $database_name);

$insert_quarry="select * from exhibitions";

if($connection->query($insert_quarry)==TRUE)
{
  echo "Record updated successfully";
}
else
{
  echo "error updating record:" . $connection->error;
}
?>