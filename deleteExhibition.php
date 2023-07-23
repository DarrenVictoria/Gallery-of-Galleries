<?php
session_start();
if (!isset($_SESSION['adminLoginID']))
{
  header("location: login.php");
}

require("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $exhibitionName = $_POST['exhibitionName'];
    
    $sql = "DELETE FROM exhibitions WHERE ExhibitionName='$exhibitionName'";   

    $exhibitions = $connection->query($sql);

    header("Location: Dashboard.php");
}

?>