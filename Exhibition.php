<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "gallery";
$conn = new mysqli($server, $username, $password, $db);

$sql = "SELECT * FROM exhibitions ORDER BY ExhibitionStartDate DESC";   

$exhibitions = $conn->query($sql);

$exhibitions->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Template</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="exhibition.css">

</head>

<body>

  <marquee class="top-marquee" scrollamount="4">* Complimentary Gallery Exhibition happening on Tuesdays every other
    week *</marquee>

  <nav class="navbar navbar-expand-lg navbar-dark  nav-bar-color" style="margin-top: -6px;">
    <a class="navbar-brand" href="index.html">
      <p class="nav-logo" style="margin-top: 5%;">Gallery of Galleries</p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="#">Exhibitions &nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Top Artists&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery Map&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">History of Art&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Art Display Gallery&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About&nbsp;&nbsp;</a>
        </li>

      </ul>
    </div>
  </nav>


  <div class="flexbox-container">
    <h1 class="category">Exhibitions</h1>

    <div class="flexbox-item-4">
    <div ><h1 class="category-2">UPCOMING</h1></div>
    <div class="date-time">

      <h4 class="category-3">Your current date and time</h4>
      <span><p id="currentDate"></p> <p id="demo"></p></span>
      

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
              
              foreach ($exhibitions as $exhibition) {
                
                echo "
                <div class=\"flexbox-item flexbox-item-2\">
                <div class=\"img\"><img src= \"assets/Images/Gallery 3 - fusion of a robot monster with an alien in the spa.jpg \"  class=\"img-fluid\"></div>
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
    <section class="page-footer">
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
              <a href="#!" class="text-reset">Exhibitions</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Top Artists</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Gallery Map</a>
            </p>
            <p>
              <a href="#!" class="text-reset">History of Art</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Art Gallery Display</a>
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
              <a href="#!" class="text-reset">Login</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <br>
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
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