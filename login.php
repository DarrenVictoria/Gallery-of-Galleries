<?php
  session_start();
  require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="styleSheet" href="login-style.css">
</head>

<body>
  <nav>
    <a href="index.php"><img src="assets\Images\login-images\arrow-left.png" alt="Back Arrow"></a>
  </nav>
  <main>
    <div class="form-wrapper">
      <form method="post"> 
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" name="uname" placeholder="Username">
          <img src="assets\Images\login-images\profile-user.png" alt="Profile Icon" class="input-box-icon">
        </div>
        <div class="input-box">
          <input type="password" name="pwd"  placeholder="Password">
          <img src="assets\Images\login-images\padlock.png" alt="Paddlock Icon" class="input-box-icon">
        </div>
        <button type="submit" class="sub-btn" name="login">Login</button>
      </form>
    </div>
  </main>
  <?php
    if (isset($_POST['login']))
    {
      $query = "SELECT * FROM usercredentials WHERE Username='$_POST[uname]' AND Password='$_POST[pwd]'";
      $result = mysqli_query($connection, $query);
      if (mysqli_num_rows($result) == 1)
      {
        $_SESSION['adminLoginID'] = $_POST['uname'];
        echo "<script>document.location = 'Dashboard.php';</script>";
        exit;
      }
      else
      {
        echo "<script>alert('Incorrect');</script>";
      }
    }
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</body>

</html>