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
  <title>Search Now</title>

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
<div class="row" style="background-color:rgba(0,0,0,0); padding-top: 20px">
  <div class="col s3">
    <form class="col s12 ">
      <div class="card" style="background-color:rgba(0,0,0,0.05);"><br>
          <p>
            <input class="with-gap" name="group1" type="radio" id="test1" />
            <label for="test1">Bike</label>&nbsp;&nbsp;&nbsp;
            <input class="with-gap" name="group1" type="radio" id="test3"  />
            <label for="test3">Scooter</label>
          </p><br>
            <div class="input-field col s12">
              <select>
                <option value="" disabled selected><h8>Select your location</h8></option>
                <option value="1">LPU</option>
                <option value="2">Jalandhar</option>
                <option value="3">Phagwara</option>
              </select>
              <label>Location</label>
            </div>
            <div class="input-field col s12">
              <input type="date" class="datepicker">
              <label>Pick-up Date</label>
            </div>
            <div class="input-field col s12">
              <input type="date" class="datepicker">
              <label>Return Date</label>
            </div>  
            <div class="center-align">
              <button class="btn waves-effect waves-light amber" type="submit" name="action" >Search<i class="material-icons right">send</i></button>
            </div><br>
    </form>
  </div>
</div>

<div class="col s9 ">
    <div class="card" style="background-color:rgba(0,0,0,0.05);">
          <h5 class="title pull-left">Available Vechicles</h5> 
    </div>
      <form action="search_now.php" method="post">
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
  <script>
     $(document).ready(function() {
    $('select').material_select();
  });

      $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
       
  </script>
  </body>
</html>
