<?php
session_start();
if (!isset($_SESSION['adminLoginID']))
{
  header("location: login.php");
}

require("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $upname = $_FILES['image']['name'];
    $tmppath = $_FILES['image']['tmp_name'];
    $moved=move_uploaded_file($tmppath,"imageshiddenupload/".$upname);

    $name = $_POST['name'];
    
    $location = $_POST['location'];
    $gallery = $_POST['gallery'];
    $sDate = $_POST['sDate'];
    $eDate = $_POST['eDate'];
    $time = $_POST['time'];

    $sql = "INSERT INTO exhibitions(ExhibitionName,ExhibitionImage,ExhibitionLocation,ExhibitionGallery,ExhibitionStartDate,ExhibitionEndDate,ExhibitionTime) VALUES ('$name','imageshiddenupload/$upname','$location','$gallery','$sDate','$eDate','$time')";

    $result = $connection->query($sql);

    if ($connection->error) {
        echo "Something went wrong! <br> Error: <br> " . $connection->error;
        exit();
    } else {
        echo "Exhibition has been added.<br><a href=\"Dashboard.php\">Go Back</a>";
        exit();
    }

    $connection->close();
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Add Exhibition</title>
</head>

<body> 

    <form action="addExhibition.php" method="post" class="m-5" enctype="multipart/form-data">
        <h3>Add new exhibition</h3>
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label class="form-label" for="customFile">Enter Exhibition image</label>
            <input style="padding:2rem; " type="file" class="form-control" id="customFile" name="image" />
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Location</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Location" name="location">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Gallery</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Gallery" name="gallery">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Start Date</label>
            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Start Date" name="sDate">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">End Date</label>
            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="End Date" name="eDate">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Time</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Time" name="time">
        </div>
        

        <div class="form-group">
            <input type="submit" class="btn btn-primary" cvalue="Save">
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>