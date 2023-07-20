<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

            $server="localhost";
            $username="root";
            $password="";
            $db="review";

            $name = $_REQUEST["Name"];
            $gallery = $_REQUEST["Galleryvisited"];
            $review = $_REQUEST["freeform-review"];

        
            /*Check if connection works*/

            $conn = new mysqli($server,$username,$password,$db);

            $sql = "INSERT INTO userreviews(ReviewerName,GalleryVisited,Review)VALUES('$name','$gallery','$review')";

            $conn->close();


    ?>


    
</body>
</html>