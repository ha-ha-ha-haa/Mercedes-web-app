<?php
//including the database connection file
include_once(".\config\config.php");

$car_id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM car_info JOIN tire using (tire_id) JOIN engine using (engine_id) WHERE car_id=$car_id"); // using mysqli_query instead
$res = mysqli_fetch_array($result);
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <style>

    body {
      background-color: #262a2f;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
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
    
    .my_container{
        margin-top: 100px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }
    .main{
      width:90%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .for_pic{
      width: 55%;
      height: 550px;
    }
    .info_container{
      width: 40%;
      height: 550px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .title{
      text-align: center;
      color: rgb(149, 149, 149);
      padding-top: 20px;
    }
    .description{
      color: rgb(149, 149, 149);
      font-size: large;
      width:80%;
      text-align: justify;
    }
    .specs{
      width:90%;
      height: 600px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
    }
    .table{
      margin-top: 20px;
      width:450px;
      height: 550px;
      display: flex;
      color: rgb(173, 173, 173);
    }
    .table_cols{
      width:50%;
      height: 550px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }
    .cols_child{
      height:61px;
      text-align: center;
      border: 1px solid rgb(99, 99, 99);
      padding-top: 15px;
      font-family: sans-serif;
      font-size: 18px;
    }


    @media (max-width: 900px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }


      .container-fluid {
        justify-content: space-between;
      }

      .featurette-heading {
        font-size: 30px;

      }
      .main{
        width: 100%;
        flex-direction: column;
      }
      .for_pic{
        width: 90%;
      }
      .info_container{
        width: 90%;
        height: 600px;
      }
      

    }
    </style>
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
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                <a class="nav-link" href="index.php">vehicles</a>
              </li>
              <li class="nav-item" style="padding:0px 20px;background-color: #262a2f;">
                <?php 
                echo "<a class=nav-link href=./edit.php?id=$car_id>Edit</a>";
                ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
    <div class="my_container">
      <div class="main">
        <?php
          echo "<div class='for_pic' style = 'background:url($res[pic]) no-repeat ;
            background-size: cover;
            background-position: center;'></div>
              <div class='info_container'>
                <h2 class='title'>".$res['car_name']." ".$res['car_model']."</h2><br>
                <p class='description'>$res[shortdescription]</p>
              </div>"
        ?>
      </div>
      <br><br>
      <div class="specs">
        <h2 class="title">SPECIFICATIONS</h2>
        <div class="table">
          <div class="table_cols heading">
            <div class="cols_child heading_val">BRAND</div>
            <div class="cols_child heading_val">MODEL</div>
            <div class="cols_child heading_val">YEAR</div>
            <div class="cols_child heading_val">COLOR</div>
            <div class="cols_child heading_val">HORSEPOWER</div>
            <div class="cols_child heading_val">RPM</div>
            <div class="cols_child heading_val">RATED MILES</div>
            <div class="cols_child heading_val">PRICE(USD)</div>
            <div class="cols_child heading_val">TIRE</div>
          </div>
          <div class="table_cols value">
            <div class="cols_child value_val"><?php echo $res["car_name"];?></div>
            <div class="cols_child value_val"><?php echo $res["car_model"];?></div>
            <div class="cols_child value_val"><?php echo $res["car_year"];?></div>
            <div class="cols_child value_val"><?php echo $res["color"];?></div>
            <div class="cols_child value_val"><?php echo $res["horsepower"];?></div>
            <div class="cols_child value_val"><?php echo $res["rpm"];?></div>
            <div class="cols_child value_val"><?php echo $res["rated_miles"];?></div>
            <div class="cols_child value_val"><?php echo $res["car_price"];?></div>
            <div class="cols_child value_val"><?php echo $res["tire_name"];?></div>


          </div>
        </div>
      </div>
    </div>
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
