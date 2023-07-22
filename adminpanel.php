<?php
    session_start();
    if (!isset($_SESSION['adminLoginID']))
    {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Welcome to the Admin page <?php echo $_SESSION['adminLoginID'];?></h1>
        <form method="POST">
            <button name="logout">Logout</button>
        </form>
    </main>

    <?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location: login.php");
        exit;
    }
    ?>
</body>
</html>