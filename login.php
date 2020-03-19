<?php
include 'db.php';
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_REQUEST['login'])){
    $email = $mysqli->real_escape_string($_REQUEST['email']);
    $password = $mysqli->real_escape_string(strip_tags($_REQUEST['password']));
    
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    if($result->num_rows < 1){
        $_SESSION['message'] = "Incorrect email, Please check again";
       
    }else{
       
        $user = $result->fetch_assoc();

        if ( password_verify($password, $user['password']) ) {
            $_SESSION['logged_in'] = true;
            

            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['active'] = $user['active'];
            
            
           
             header('location:dashboard.php');
        }else{
            $_SESSION['message'] = 'wrong password entered';
           
          }


        
    }
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampcyclers</title>
    <link rel = 'stylesheet' type="text/css" href="index.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
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
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2 style="color:white">Login</h2>
    </div>
    
      <?php
      
         if (isset($_SESSION['message'])){
          echo "<div class='alert alert-danger text-center'>";
          echo $_SESSION['message'];
          unset ($_SESSION['message']);
          echo "</div>";
      }
      ?>
    
    <div class="row clearfix">
      <div class="">
        <form  method = 'POST' action = 'login.php'>
        <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Email" required/>
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input type="password" name="password" placeholder="password" required />
              </div>
            </div>
          </div>
          
         
         
            <p style="color:white">No account Yet? <a href="register.php">Sign up here</a><p>

          <input class="button" type="submit" name="login" value="Login" />
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://use.fontawesome.com/9d03eba9c5.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


