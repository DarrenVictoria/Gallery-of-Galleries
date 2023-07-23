<?php
    // $connection = mysqli_connect("localhost", "root", "", "adminlogin");
    $connection = new mysqli("localhost", "root", "", "adminlogin");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

?>
