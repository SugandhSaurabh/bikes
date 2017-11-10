<?php
include_once 'conn.php'; 
//signup
if(isset($_POST["submit"])){
  $a = $_POST['fname']; 
    $b= $_POST['lname']; 
    $c = $_POST['phone'];
    $d = $_POST['email']; 
    $e = $_POST['pass']; 
  $query="insert tbusers values(null,'$a','$b','$c','$d','$e')";
  $res=mysqli_query($link,$query);
  if(mysqli_affected_rows($link)==1)
  {
    $message = "You have Registered Successfully!! ";
                echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else
    $message = "You have Already Registered";
                echo "<script type='text/javascript'>alert('$message');</script>";
}
//login
if(isset($_POST["sub"]))
{
    $a=$_POST["email"];
    $b=$_POST["pass"];
    $qry="call logincheck('$a','$b',@ret)";
    $res=  mysqli_query($link, $qry) ;
    $res1=mysqli_query($link,"select @ret") or die(mysqli_error($link));
    $r=mysqli_fetch_row($res1);
    $d=$r[0];
    if($d==-1)
    {
       $message = "Wrong Username ";
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else if($d==-2)
          {
            $message = "Wrong Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
          
 else 
      {
          $message = "You are Successfully Logged In!! ";
          echo "<script type='text/javascript'>alert('$message');location.href = 'home.php';</script>";
      }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Sign up</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script>
function Valdata()
{
   /// alert('ss');
  
    var em=document.getElementById('email').value;
    var up=document.getElementById('pass1').value;
    var cp=document.getElementById('pass2').value;
    var s=true;
    
     
    if(up==null || up=="")
    {
        s=false;
        alert("password empty!!!<br>");   }   
         if(cp==null || cp=="")    
          {        s=false;       
           alert("confirm password empty!!!<br>");
          }
    if(cp!=up)
    {
        s=false;
        alert(" confirm password and user password are not same ");
    }
    if(!(up.length>=6 && up.length<=12))
    {
        s=false;
        alert("userpassword must be between 6 to 12!!!<br>");
    }
   
return s;
}



    

</script>

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
    <a href="index.html" class="brand-logo"><img src="images/logo.png" alt="logo"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Bikes</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Scooters</a></li>
       <li><a href="#">Contact us</a></li>
        <li><a href="#"><img src="images/cart.png"></a></li>
    </ul>
  </div>
</nav>
<div class="row" style="background-color:rgba(0,0,0,0); padding-top: 20px">
<div class="row">
<div class="col s5">
    
    
    <div class="card" style="background-color:rgba(0,0,0,0.02);">
        <br>
        <h5><center>Already a Member?</center></h5>

    <form name="f1" action="login.php" method="POST">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="pass" required>
          <label for="password">Password</label>
        </div>
    
       <br>
        <div class="col s12">
      <p class="forgot"><a href="#">Forgot Password?</a></p>
        </div>

        <div class="center-align">
      <input class="btn waves-effect waves-light amber" type="submit" name="sub" value="Login">
    </div>
    <br>
    </form>
    </div>      
</div>
<div class="col s6 ">
    
    
    <div class="card" style="background-color:rgba(0,0,0,0.02);">
    <br>
        <h5><center>Create a new account</center></h5> 

       <div class="row">
    <form class="col s12" action="login.php" method="post" onsubmit="return Valdata();">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="fname" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lname" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <input id="telephone" type="number" class="validate" name="phone" required>
          <label for="telephone">Phone Number</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pass1" type="password" class="validate" name="pass" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pass2" type="password" class="validate" name="cpass" required>
          <label for="password">Confirm Password</label>
        </div>
      </div>
   
     <div class="center-align">
      <input class="btn waves-effect waves-light amber" type="submit" name="submit" value="Sign Up"/>
    </div>
    <br>
  </div>
     </form>
     
    </div>

</div>
    </div>
</div>
 <footer class="page-footer  grey darken-3">
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
