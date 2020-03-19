
<?php
include 'db.php';
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="home_nav.css">
    <title>Ampcyclers</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<span class="d-inline-block align-top" alt=""><i class="fab fa-asymmetrik" style="font-size:48px; color:#11d87bef"></i></span>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto bars">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About-Us </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact-Us</a>
      </li>

    </ul>
    <span class="login">
    <a style="color:white; font-size:1.2rem;"  href="login.php">Login/Register</a>
</span>
    </div>
  </div>
</nav>


<div class="container" >
<div class="jumbotron text-center" style="height:250px;  ">
<h1>Welcome to Ampcyclers</h1>
<h5>Your go-to waste recyclers...</h5>
<button id='buttn' name='get-started'><a style="color:white; text-decoration:none;" href='login.php'>Get Started</a></button>
</div>

<div class="row">
  <div class='col-sm-12 col-md-6'>
  <h2 class="text-center">What do we Stand for?</h2>
  <p style="font-size:1.2rem; text-align:left;" >Waste mismanagement is a severe problem in Lagos whereby thousand Tonnes of wastes are clogging the drainages and landfill. This wastes can however be monetized through recycling if a well structured system is directed towards waste sorting.
Amp Cyclers stand for high waste sorting culture, proper waste disposal and recycling. We strongly uphold our values of sustainable cities and communities by ensuring low carbon emission and climate action through smart waste management system. We also stand for life on land and life on water
The sustainable development goals 11, 13, 14 and 15 to drive towards a smart Lagos are our threshold. </p>
  </div>
  
  <div class='col-sm-12 col-md-6 text-center'>
   
    <img src="images/image8.jpg" height="80%" width="80%" >
  
  </div>
  
  </div>

</div>



</div>

</body>

<script src="https://use.fontawesome.com/9d03eba9c5.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>