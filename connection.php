<?php
    // $connection = mysqli_connect("localhost", "root", "", "adminlogin");
    $connection = new mysqli("localhost", "id21049122_galleryofgalleriesadmin", "Gallery#of@Galleries%2023", "id21049122_adminlogin");

    $sql = "SELECT Username FROM usercredentials";   

    $users = $conn->query($sql);

    $users->fetch_all();

    print_r($users);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

?>
