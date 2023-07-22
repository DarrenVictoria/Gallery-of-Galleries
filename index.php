<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "gallery";
$conn = new mysqli($server, $username, $password, $db);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST["name"];
  $gallery = $_POST["gallery_visited"];
  $review = $_POST["review"];

  $sql = "INSERT INTO userreviews(ReviewerName,GalleryVisited,Review) VALUES ('$name','$gallery','$review')";

  $result = $conn->query($sql);

  if ($conn->error) {
    echo "Something went wrong! <br> Error: <br> " . $conn->error;
    exit();
  } else {
    echo "Your review has been added to the website.<br><a href=\"index.php\">Go Back</a>";
    exit();
  }

  $conn->close();
}

$sql = "SELECT * FROM userreviews";

$reviews = $conn->query($sql);
$reviews->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="/assets/Logo/gallery-of-galleries-logo-zip-file/png/logo-no-background.ico">
  <title>Gallery of Galleries</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="styleSheet" href="Style.css">

</head>

<body>
  <marquee class="top-marquee" scrollamount="4">* Complimentary Gallery Exhibition happening on Tuesdays every other
    week *</marquee>

  <nav class="navbar navbar-expand-lg navbar-dark  nav-bar-color" style="margin-top: -6px;">
    <a class="navbar-brand" href="index.php" style="padding: 0%; margin: 0%;">
      <img class="logo-main" style="width:150px; height:auto;" src="assets/Logo/gallery-of-galleries-logo-zip-file/png/logo-white-removebg small.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="Exhibition.php">Exhibitions &nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Artists.html">Top Artists&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="GalleryMap.html">Gallery Map&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="HistoryOfArt.html">History of Art&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AI Art.html">Art Display Gallery&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">About&nbsp;&nbsp;</a>
        </li>

      </ul>
    </div>
  </nav>


  <!--Hero-->
  <div class="card bg-dark text-white" style="border-radius: 0;">
    <img class="card-img" src="assets/Background/Hero background 2.png" alt="Card image" height="600vh">
    <div class="card-img-overlay">
      <h1 class="card-title centertopcardtext bebas-neue">Gallery of Galleries</h1>
      <p class="card-text centertopcardsubtext inter" id="herosubtext">Discover and connect with top art spaces in Sri
        Lanka. Explore diverse genres, mediums, and styles.<br> Your gateway to an immersive art experience. Engage with
        the vibrant art community.</p>

    </div>
  </div>

  <!-- Card -->
  <div style="padding: 2%;">
    <div class="card-mid mb-3 changecolour inter">
      <div class="row d-flex ">
        <div class=" card-image col-md-4">
          <img src="assets/Images/Exhibition Redirect.jpg" class="img-fluid rounded-start" alt="Exhibition" style="padding: 4%;  border-radius: 25px; " />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title bebas-neue-sub">Plan your Exhibition according to your Schedule</h5>
            <p class="card-text">Experience captivating exhibitions of world-class art at our virtual gallery. Explore a
              diverse collection of masterpieces, from paintings to sculptures, each telling a unique story. Immerse
              yourself in the artist's vision through interactive elements and informative descriptions. Click now to
              embark on an awe-inspiring artistic journey.</p>
            <button type="button" class="btn btn-outline-light btn-lg align-self-md-end ">Exhibitions Calendar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Card -->
  <div style="padding: 2%;">
    <div class="card-mid mb-3 changecolour inter">
      <div class="row d-flex flex-row-reverse">
        <div class="card-image col-md-4">
          <img src="assets/Images/Artist.jpg" class="img-fluid rounded-start" alt="Exhibition" style="padding: 4%;  border-radius: 25px; " />
        </div>
        <div class="card-content col-md-8">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title bebas-neue-sub text-md-right">VIEW YOUR PIECES BASED ON YOUR TOP ARTIST</h5>
            <p class="card-text text-md-right">Explore our virtual artists hub and discover a world of creativity. From painters to photographers, our platform
              showcases diverse talents. Connect with captivating artists and be inspired by their works. Click now to dive
              into the vibrant community and embark on an unforgettable artistic journey.</p>
            <button type="button" class="btn btn-outline-light btn-lg align-self-md-end">View top artists</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card inter" style="margin: 2%;  border-width : 0; background:transparent">
    <div class="card-body ">
      <h5 class="card-title bebas-neue-sub" style="color: black; ">Gallery Map</h5>
      <p class="card-text" style="color: black;">Experience the art scene of Sri Lanka like never before with our
        interactive gallery map. Discover captivating galleries across the country, showcasing rich cultural heritage
        and contemporary artistry. Click below to explore the map and embark on an art expedition through Sri Lanka. Let
        the exploration begin!</p>
      <button type="button" class="btn btn-outline-dark btn-lg">Visit to explore Galleries</button><br><br>
    </div>

    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1-gRo0y-uDqMhGYnRDUVMDE2YPcFQi_w&ehbc=2E312F" width="100%" height="550" style="border-radius: 25px; border-width: 0px;"></iframe>
  </div>

  <div class="card-columns ">
    <div class="card  bg-dark">
      <img class="card-img-top" src="assets/Images/Gallery 1 - A nerdy boy programming.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title" style="color: aliceblue;">Nerdy boy programming</h5>
        <p class="card-text" style="color: aliceblue;">Prompt - Nerdy boy programming at a computer in a room full of gadgets, by makoto shinkai and ghibli studio, dramatic lighting, highly detailed, incredible quality</p>
      </div>
    </div>

    <div class="card bg-dark" style="height: 19vw; overflow: hidden;  ">
      <img class="card-img" src="assets/Images/Gallery 2 - Cute and adorable darkside waving and smiling gree.jpg" alt="Card image">
    </div>

    <div class="card p-3 text-right bg-dark">
      <blockquote class="blockquote mb-0">
        <p style="color: aliceblue;">
          <quote>When robots become artists, it's a masterpiece of machine learning.</quote>
        </p>
        <footer class="blockquote-footer">
          <small class="text-muted">
            AI <cite title="Source Title"></cite>
          </small>
        </footer>
      </blockquote>
    </div>

    <div class="card bg-dark">
      <img class="card-img-top" src="assets/Images/Gallery 3 - fusion of a robot monster with an alien in the spa.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title" style="color: aliceblue;">Fusion of a robot monster</h5>
        <p class="card-text" style="color: aliceblue;">Prompt - Fusion of a robot monster with an alien in the space, style of laurie greasley, studio ghibli, akira toriyama, james gilleard, genshin impact, trending pixiv fanbox, trending on artstation, low details, light colors, dark background, sharp shadows, sharp colors, simple, no complexity, make it as simple as possible, no deep details, low details</p>

      </div>
    </div>

    <div class="card bg-dark">
      <img class="card-img" src="assets/Images/Gallery 4 - Man holding a flashlight on a school at night.jpg" alt="Card image">
    </div>
    <div class="card p-3 text-right bg-dark">
      <blockquote class="blockquote mb-0">
        <p style="color: aliceblue;">
          <quote>AI art: because sometimes machines can create beauty that humans can't even imagine.</quote>
        </p>
        <footer class="blockquote-footer">
          <small class="text-muted">
            AI <cite title="Source Title"></cite>
          </small>
        </footer>
      </blockquote>
    </div>

    <div class="card bg-dark">
      <img class="card-img" src="assets/Images/Gallery 5 - Iridescent.jpg" alt="Card image">
    </div>

    <div class="card inter" style="margin: 2%; background-color:#b9a684; border-width : 0">
      <div class="card-body bodybgcolor">
        <h5 class="card-title bebas-neue-sub" style="color: black; ">Art Display Gallery</h5>
        <p class="card-text" style="color: black; ">Experience our virtual art gallery and step into a world of
          captivating displays. Discover a diverse collection of artworks, from classic to contemporary, thoughtfully
          showcased in immersive exhibitions. Click below to embark on a visual journey, where creativity knows no
          bounds. Let the art transport you to new dimensions of imagination.</p>
        <button type="button" class="btn btn-outline-dark btn-lg">Visit Art Gallery</button><br><br>
      </div>
    </div>

  </div>

  <p class="Review-Form-Heading"> Leave your gallery experience as a review</p>

  <form method="POST" action="index.php" style="padding: 30px;">
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" name="name" id="Name" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="GalleryVisited">Gallery Visited</label>
      <input type="text" class="form-control" name="gallery_visited" id="GalleryVisited" aria-describedby="emailHelp" placeholder="Enter Gallery Visited">
    </div>
    <div class="form-group">
      <textarea class="form-control" id="Review" name="review" rows="4" cols="50" placeholder="Enter review here..."></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  <div class="m-3 ">
    <h3>Reviews</h3>
    <div style="border:1px solid; border-color:#8e6f5b; border-radius:20px; height:50rem; overflow:scroll;" width="100%">
        <?php
        
        foreach ($reviews as $review) {
          
          echo "
            <div class=\"card single-review\">
          <div class=\"card-header\"> Visited
            "  . $review['GalleryVisited']  . "
          </div>
          <div class=\"card-body\">
            <blockquote class=\"blockquote mb-0\">
              <p>" . $review['Review'] . "</p>
              <footer class=\"blockquote-footer\">Posted by : <i>" .$review['ReviewerName']. "</i></footer>
            </blockquote>
          </div>
        </div>";
        
        }
        
      
        
        ?>
    </div>

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
              <a href="Exhibitions.php" class="text-reset">Exhibitions</a>
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
              <a href="Login.php" class="text-reset">Login to system</a>
            </p>
            <p>
              <a href="Dasboard.php" class="text-reset">Dashboard</a>
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
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 94 7434 57 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 94 7424 56 89</p>
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







  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>