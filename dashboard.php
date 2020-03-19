
<?php
include 'db.php';
session_start();

if(!($_SESSION['logged_in'])){
  header('location:login.php');
}


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
    <link rel="stylesheet" href="dashboard.css">
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
    <a style="color:white; font-size:1.2rem;"  href="logout.php">Logout</a>
</span>
    </div>
  </div>
</nav>

<div>
  <div class="container">
  <div id="alert" class="alert alert-success text-center" style="display:none;">
</div>
  </div>
<div class = 'text-box text-center m-auto'>
        <h4 style="line-height:2rem">Hi <?= $_SESSION['last_name'] ?>, Please click the button below to send a notification<h4>
        <button id='buttn'onclick = 'runAlert()' name='get-started'>Send notification!</a></button>

         
</div>

</body>
<script>
  
  function runAlert(){
    document.getElementById('alert').style.display="block";
    document.getElementById('alert').innerHTML = "Notification Successfully sent";

    setTimeout(() => {
      document.getElementById('alert').style.display="none";
    document.getElementById('alert').innerHTML = "";

  }, 5000);

  }
</script>
<script src="https://use.fontawesome.com/9d03eba9c5.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>