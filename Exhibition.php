<?php

require("connection.php");

$sql = "SELECT * FROM exhibitions ORDER BY ExhibitionStartDate DESC";   

$exhibitions = $connection->query($sql);

$exhibitions->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="/assets/Logo/gallery-of-galleries-logo-zip-file/png/logo-no-background.ico">
  <title>Exhibitions</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="exhibition.css">

</head>

<body style="overflow-x: hidden; max-width:100%;">
    <script>
            document.addEventListener('DOMContentLoaded', () => {
            var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
             if(disclaimer){
                 disclaimer.remove();
             }  
           });
  </script>

  <marquee class="top-marquee" scrollamount="4">* Complimentary Gallery Exhibition happening on Tuesdays every other
    week *</marquee>

  <nav class="navbar navbar-expand-lg navbar-dark nav-bar-color" style="margin-top: -6px;">
    <a class="navbar-brand" href="index.php" style="padding: 0%; margin: 0%;">
      <img class="logo-main" style="width:150px; height:auto;" src="assets/Logo/gallery-of-galleries-logo-zip-file/png/logo-white-removebg small.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" style="gap: .5rem;">

        <li class="nav-item">
          <a class="nav-link" href="Exhibition.php">Exhibitions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Artists.html">Top Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="GalleryMap.html">Gallery Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="HistoryOfArt.html">History of Art</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AI Art.html">Art Display Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">About</a>
        </li>
        <li class="nav-item"> 
          <a href="login.php"><button name="login" class="login btn btn-primary nav-link">Login</button></a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="flexbox-container">
    <h1 class="category">Exhibitions</h1>

    <div class="flexbox-item-4">
    <div ><h1 class="category-2" >UPCOMING</h1></div>
    <div class="date-time">

      <h4 class="category-3">Your current date and time</h4>
       <p class="date-time-text" id="currentDate"></p>
        <p class="date-time-text" id="demo"></p>
      

       <script>

        
        function getCurrentDateFormatted() {
            const currentDate = new Date();
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth() + 1;
            const day = currentDate.getDate();
            return `${year}-${month < 10 ? '0' : ''}${month}-${day < 10 ? '0' : ''}${day}`;
        }
        const currentDateElement = document.getElementById('currentDate');
        currentDateElement.textContent = getCurrentDateFormatted();

        let myVar = setInterval(myTimer ,1000);
        function myTimer() {
          const d = new Date();
          document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
      
      </script>
    </div>
    </div>

    
        <?php
              
              $today = date("Y-m-d");
              $today_time = strtotime($today);
              foreach ($exhibitions as $exhibition) {

                $expire_time = strtotime($exhibition['ExhibitionEndDate']);

                if ($expire_time < $today_time) {
                   $class_list = "flexbox-item expiered";
                }
                else{
                  $class_list = "flexbox-item";
                }
                echo "
                <div class=\"" . $class_list ."\" >
                <div class=\"img\"><img src=\" ". $exhibition['ExhibitionImage'] ."\"  class=\"img-fluid\"></div>
                <div class=\"text\"><p class=\"p1\" id=\"txt2\">". $exhibition['ExhibitionName'] ."</p>
                  <p>
                    Location: " .$exhibition['ExhibitionLocation'] . "<br>
                    Gallery :" . $exhibition['ExhibitionGallery'] . "<br>
                    Start date : " . $exhibition['ExhibitionStartDate'] . "<br>
                    End date : " . $exhibition['ExhibitionEndDate'] . "<br>
                    Time: " . $exhibition['ExhibitionTime'] . "<br>
                  </p>
                </div>
                
              </div> ";
              
              }
              
            
              
              ?>
   <br>
    
  </div>
  
 


  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark text-muted">
    <!-- Section: Links  -->
    <section class="page-footer" style="padding:10px">
      <div class="container text-center text-md-start mt-5" style=>
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <br>
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Gallery of Galleries (Pvt) Ltd
            </h6>
            <p>
              Gallery of Galleries, your ultimate local gallery directory. Discover a curated collection of art
              galleries in your area, showcasing the best of local talent. From contemporary spaces to hidden gems,
              explore the diverse artistic landscape right at your fingertips.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <br>
            <h6 class="text-uppercase fw-bold mb-4">
              Pages
            </h6>
            <p>
              <a href="Exhibition.php" class="text-reset">Exhibitions</a>
            </p>
            <p>
              <a href="Artists.html" class="text-reset">Top Artists</a>
            </p>
            <p>
              <a href="GalleryMap.html" class="text-reset">Gallery Map</a>
            </p>
            <p>
              <a href="HistoryOfArt.html" class="text-reset">History of Art</a>
            </p>
            <p>
              <a href="AI Art.html" class="text-reset">Art Gallery Display</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <br>
            <h6 class="text-uppercase fw-bold mb-4">
              Edit Dashboard
            </h6>
            <p>
              <a href="login.php" class="text-reset">Login to system</a>
            </p>
            <p>
              <a href="Dashboard.php" class="text-reset">Dashboard</a>
            </p>
            <p>
              <a href="#!" class="text-reset"></a>
            </p>
            <p>
              <a href="#!" class="text-reset"></a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <br>
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Colombo 07 , Sri Lanka</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              galleryofgalleries@artists.com
            </p>
            <p>+ 94 713456484</p>
            <p>+94 703412996</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright: Gallery of Galleries

    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->






  
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