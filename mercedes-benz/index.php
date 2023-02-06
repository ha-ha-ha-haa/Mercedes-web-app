<?php
//including the database connection file
include_once(".\config\config.php");

$result = mysqli_query($mysqli, "SELECT car_id,car_name,car_model,shortdescription,pic FROM car_info"); // using mysqli_query instead
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Carousel Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #262a2f;
    }

    .navbar1 {}

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (max-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }

      .nav-container {
        display: none;
      }

      .container-fluid {
        justify-content: space-between;
      }

      .featurette-heading {
        font-size: 30px;

      }

    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(173, 173, 173, 0.1);
      border: solid rgba(153, 153, 153, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .nav-container {
      display: flex;
      align-items: center;

    }

    .container-fluid {
      justify-content: center;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid" style="justify-content: center;">
        <a class="navbar-brand" href="#"><img
            src="https://www.mercedes-benz.com/content/dam/brandhub/global/logos/MB-star_n_web.svg" width="70%"
            alt=""></a>
            
        <button class="navbar-toggler" style="border: none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="border: none;"></span>
        </button>
        <div class="nav-container" id="nav-container">
          <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Art & Culture</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sustainability</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Innovation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Exclusive</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">vehicles</a>
              </li>
              <li class="nav-item" style="padding:0px 20px;background-color: #262a2f;">
                <a class="nav-link" href="new_car.php">Add new</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background:linear-gradient(
        to bottom,
        rgba(245, 246, 252, 0),
        rgba(0, 0, 0, 0.733)
      ),url(https://www.mercedes-benz.com/en/_jcr_content/root/stage/parsys/stageitem/image/MQ6-0-image-20221017082646/22C0291_001_Stage_3400x1400.jpeg) no-repeat ;
      background-position: center;">

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Digital
                World <br>
                Premiere <br>
                EQE
                SUV</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, delectus, quas similiqu</p>
              <p><a class="btn btn-lg btn-primary" href="http://mb4.me/eqe-suv-premiere">Discover more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background:linear-gradient(
        to bottom,
        rgba(245, 246, 252, 0),
        rgba(0, 0, 0, 0.733)
      ),url(https://www.mercedes-benz.com/en/vehicles/mercedes-benz-classic/classiccenter/_jcr_content/root/fullscreenstage_copy/image/MQ7-0-image-20211117150519/01-mercedes-benz-classic-centerfellbach-header-5120x2240.jpeg) no-repeat ;
      background-position: center;;">

          <div class="container">
            <div class="carousel-caption">
              <h1>Mercedes-Benz <br>
                Classic
                Center.</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, delectus, quas similiqu</p>
              <p><a class="btn btn-lg btn-primary"
                  href="https://www.mercedes-benz.com/en/vehicles/mercedes-benz-classic/classiccenter/">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background:linear-gradient(
        to bottom,
        rgba(245, 246, 252, 0),
        rgba(0, 0, 0, 0.733)
      ),url(https://www.mercedes-benz.com/en/_jcr_content/root/stage/parsys/stageitem_1441300015/image/MQ6-0-image-20220722084958/mercedes-benz-home-stage-project-maybach-3840x2160-08-2022.jpeg) no-repeat ;
      background-position: center;">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <?php
    $counter = 1;
    while ($res = mysqli_fetch_array($result)) {
      if ($counter % 2 == 0) {
        echo '<hr class="featurette-divider">';
        echo "<div class='row featurette'>
        <div class='col-md-7'>
          <a href=car.php?id=$res[car_id] class='featurette-heading fw-normal lh-1' style = 'text-decoration:none;color:#a3a3a3'>" . $res["car_name"] . " " . $res["car_model"] . "
  </a><br></br>
          <p class='lead' style='text-align:justify;'>$res[shortdescription]
  
          </p>
        </div>
        <div class='col-md-5' style='background:linear-gradient(
          to bottom,
          rgba(245, 246, 252, 0),
          rgba(0, 0, 0, 0.733)
        ),url($res[pic]) no-repeat;
        background-size: cover;
        background-position: center;'>
  
        </div>
      </div>";
      } else {
        echo '<hr class="featurette-divider">';

        echo "<div class='row featurette'>
          <div class='col-md-7 order-md-2'>
            <a href=car.php?id=$res[car_id] class='featurette-heading fw-normal lh-1' style = 'text-decoration:none;color:#a3a3a3'>" . $res["car_name"] . " " . $res["car_model"] . "</a><br></br>
            <p class='lead' style='text-align:justify;'>$res[shortdescription]</p>
          </div>
          <div class='col-md-5 order-md-1' style='background:linear-gradient(
            to bottom,
            rgba(245, 246, 252, 0),
            rgba(0, 0, 0, 0.733)
          ),url($res[pic]) no-repeat;
          background-size: cover;
          background-position: center;'>
    
          </div>
        </div>";
      }
      $counter++;
    }
    ?>

      <hr class="featurette-divider">
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
  </main>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var windowSize = window.innerWidth;

    if (windowSize <= 768) {
      var parent = document.getElementById('nav-container');
      parent.replaceWith(...parent.childNodes);
    }
    function deleteparent() {
      var windowSize = window.innerWidth;

      if (windowSize <= 768) {
        var parent = document.getElementById('nav-container');
        parent.replaceWith(...parent.childNodes);
      }
      else {
        const child = document.getElementById('navbarCollapse');
        var parent = child.parentNode;
        var wrapper = document.createElement('div');
        wrapper.className = 'nav-container';
        wrapper.id = 'nav-container';
        // set the wrapper as child (instead of the element)
        parent.replaceChild(wrapper, child);
        // set element as child of wrapper
        wrapper.appendChild(child);
      }

    }

    window.addEventListener('resize', deleteparent);
  </script>

</body>

</html>