<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "gallery";
$conn = new mysqli($server, $username, $password, $db);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // $name = $_POST['name'];
    $image = $_POST['image'];
    $location = $_POST['location'];
    $gallery = $_POST['gallery'];
    $sDate = $_POST['sDate'];
    $eDate = $_POST['eDate'];
    $time = $_POST['time'];

    $sql = "UPDATE exhibitions SET ExhibitionImage='$image',ExhibitionLocation='$location',ExhibitionGallery='$gallery',ExhibitionStartDate='$sDate',ExhibitionEndDate='$eDate',ExhibitionTime='$time'";

    $result = $conn->query($sql);

    if ($conn->error) {
        echo "Something went wrong! <br> Error: <br> " . $conn->error;
        exit();
    } else {
        echo "Exhibition has been updated.<br><a href=\"Dashboard.php\">Go Back</a>";
        exit();
    }

    $conn->close();
    
}

$exhibitionName = $_GET['exhibitionName'];
$sql = "SELECT * FROM exhibitions WHERE exhibitionName='$exhibitionName'";

$result = $conn->query($sql);
$exhibition = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <form action="editExhibition.php" method="post" class="m-5">
        <h3>Edit exhibition</h3>
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name" disabled value="<?php echo $exhibition['ExhibitionName'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Image</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Image" name="image" value="<?php echo $exhibition['ExhibitionImage'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Location</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Location" name="location" value="<?php echo $exhibition['ExhibitionLocation'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Gallery</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Gallery" name="gallery" value="<?php echo $exhibition['ExhibitionGallery'] ?>">
        </div> 
        <div class="form-group">
            <label for="formGroupExampleInput2">Start Date</label>
            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Start Date" name="sDate" value="<?php echo $exhibition['ExhibitionStartDate'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">End Date</label>
            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="End Date" name="eDate" value="<?php echo $exhibition['ExhibitionEndDate'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Time</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Time" name="time" value="<?php echo $exhibition['ExhibitionTime'] ?>">
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