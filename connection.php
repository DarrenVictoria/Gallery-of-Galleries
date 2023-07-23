<?php

    $session = "localhost";
    $username = "id21049122_galleryofgalleriesadmin";
    $password = "Gallery#of@Galleries%2023";
    $database_name = "id21049122_adminlogin";
    
    $connection = new mysqli($session, $username, $password, $database_name);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

?>
