<?php
session_start();
if (!isset($_SESSION['adminLoginID']))
{
  header("location: login.php");
}
$server = "localhost";
$username = "root";
$password = "";
$db = "gallery";
$conn = new mysqli($server, $username, $password, $db);

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $exhibitionName = $_POST['exhibitionName'];
    
    $sql = "DELETE FROM exhibitions WHERE ExhibitionName='$exhibitionName'";   

    $exhibitions = $conn->query($sql);

    header("Location: Dashboard.php");
}

?>