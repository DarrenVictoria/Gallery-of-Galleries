<?php
    $connection = mysqli_connect("localhost", "root", "", "adminlogin");

    if (mysqli_connect_error())
    {
        echo "Cannot connect";
    }
?>