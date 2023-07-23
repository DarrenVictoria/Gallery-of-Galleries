<?php
    // $connection = mysqli_connect("localhost", "root", "", "adminlogin");
    $connection = new mysqli("localhost", "root", "", "adminlogin");

    $sql = "SELECT Username FROM usercredentials";   

    $users = $conn->query($sql);

    $users->fetch_all();

    print_r($exhibitions);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

?>
