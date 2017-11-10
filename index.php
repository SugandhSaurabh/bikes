<?php
include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .card{
    height: 100%;
    width:100%;
  }
</style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Rent and Ride</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Pulsar</a></li>
  <li class="divider"></li>
  <li><a href="#!">Avenger</a></li>
  <li class="divider"></li>
  <li><a href="#!">Royal Enfield</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Pleasure</a></li>
  <li class="divider"></li>
  <li><a href="#!">Activa</a></li>
  <li class="divider"></li>
  <li><a href="#!">Dio</a></li>
</ul>
<nav>
  <div class="nav-wrapper amber ">
    <a href="index.php" class="brand-logo"><img src="images/logo.png" alt="logo"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Bikes</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Scooters</a></li>
       <li><a href="#foot">Contact us</a></li>
       <li><a href="#"><img src="images/cart.png"></a></li>
       <li><a href="login.php"><i class="material-icons right"><img src="images/login.png"></i>Login/Sign Up</a></li>
    </ul>
  </div>
</nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center orange-text text-lighten-2">Rent &amp; Ride</h1>
        <div class="row center">
          <h5 class="header col s12 grey-text lighten-2">Hire your bike at Best Price</h5>
        </div>
        <div class="row center">
          <a href="search_now.php" id="download-button" class="btn-large waves-effect waves-light amber lighten-1">SEARCH NOW</a>
        </div>
        <br><br>

      </div>  
    </div>
    <div class="parallax"><img src="images/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
        <h4>Available Bikes</h4>
        <form action="index.php" method="post">
    <?php
    $qry ="select * from avail_bikes";
  $res =mysqli_query($GLOBALS['link'],$qry);
  
  echo"<table>";
  $i=2;
  while($r = mysqli_fetch_array($res))
  {
    $i++;
    if($i==3)
    {
      echo"<tr>";
      $i=0;
    }
    echo "<td>";
    echo "<div class ='card'>";
    echo "<div class='card-image waves-effect waves-block waves-light'>";
    echo "<img class='activator' src='$r[0]' height=170 width=100>";
    echo "</div>";
    echo "<div class='card-content'>";
    echo "<span class='card-title activator grey-text text-darken-4'>$r[1]<i class='material-icons right'>more_vert</i></span>";  
    echo "<p><a href='#'>Price : &#8377; $r[5]</a></p>";
    echo "</div>";
    echo "<div class='card-reveal'>";
    echo "<span class='card-title grey-text text-darken-4'>$r[1]<i class='material-icons right'>close</i></span>";
    echo "Engine : $r[2]<br>";
    echo "Top Speed: $r[3]<br>";
    echo "Mileage:$r[4]<br>";
    echo "Price : &#8377; $r[5]<br>";
    echo "<a href='cart.php?bid=$r[6]&action=Add'>Add to cart</a><br>";
    echo " <button class=btn waves-effect waves-light amber type=submit name=action><a href=cart.php>Book Now</a></button>";
    echo "</div>";
    echo "</div>"; 
    echo "</td>";  

      if($i==2)
      {
       
        echo"</tr>";
      }
      }
     echo"</table>";  
    ?>
  </form>
    </div>
    </div>

    </div>
    </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      
    </div>
    <div class="parallax"><img src="images/background2.jpeg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="images/quality.jpg"></h2>
            <h5 class="center">Best Quality Assurance</h5>

            <p class="light"><center>Bikes we provide you will be in the very good condition. Better road grip, Good mileage and smooth riding experience. We provide you the best bikes available.</center></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><img src="images/telemarketer.png"></h2>
            <h5 class="center">24/7 Customer Support</h5>

            <p class="light"><center> We have a 24/7 customer support team for your support and queries. We are always available for you.</center></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="images/helmet.png"></h2>
            <h5 class="center">Free Helmets</h5>

            <p class="light"><center>We give you free helmet with every bike booking. Safety is our priority.</center></p>
          </div>
        </div>
      </div>

    </div>
  </div>



  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 #eceff1-text">Earn money from your bike.</h4>
          <h5 class="header col s12 #eceff1-text">Earn money upto  &#8377;2000 per month by renting out your bike. Simply list your bike with details, photos and documents of the bike.</h5>
          <button class="btn waves-effect waves-light amber" type="submit" name="action"><a href="earn_money.html"> Submit</a>
    
  </button>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer  grey darken-3" id="foot">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Rent &amp; Ride</h5>
          <p class="blue-text text-lighten-4">Rent and ride is start up company established in 2017. We provide bikes and scooters on rent at very reasonable cost. It is rapidly growing in the market of Punjab. This company was founded by the student of Lovely Proesional University.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Locations</h5>
          <ul>
            <li><a class="blue-text" href="#!">Jalandhar</a></li>
            <li><a class="blue-text" href="#!">Phagwara</a></li>
            <li><a class="blue-text" href="#!">Chandigarh</a></li>
            <li><a class="blue-text" href="#!">Amritsar</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect with us</h5>
          <ul>
            <li><a class="black-text" href="#!"><center><img src="images/facebook.png"></center></a></li>
            <li><a class="black-text" href="#!"><center><img src="images/twitter.png"></center></a></li>
            <li><a class="black-text" href="#!"><center><img src="images/instagram.png"></center></a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="https://www.facebook.com/sugandh.saurabh.7">SSS</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
