<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login CFTDC</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image.PNG" href="assets/Images/logo.PNG" >
  <link href="assets/css/login.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <style type="text/css">
    @media screen and (min-width: 900px) {
      .CFTDC{
        margin-left: 60px; } }
        @media screen and (max-width: 950px) {
      .CFTDC{
        margin-left: 60px; } }

  </style>
</head>
<script type="text/javascript">
$(document).ready(function(){
$.get("login.php",function(data){
$(".error").html(data);
});
});

</script>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/landing1.jpg"  alt="login" class="login-card-img" >
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 50px;height: 50px">
                 <a href="index.php"><h1 class="CFTDC" style=" margin-top: -50px; color: black; ">CFTDC</h1></a>
              </div>
              <p class="login-card-description" style="color:#ff914d">Sign into your account</p>
             <form class="form" action="login.php" method="POST" accept-charset="utf-8">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input class="lastname" type="hidden" name="uid" value="hidden" placeholder="Enter your Email">
                  <button id="login"  class="btn btn-block login-btn mb-4" type="submit" name="submit" style="background-color: #ff914d">Log in</button>
                  <!-- <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login" type="submit"  style="background-color: #ff914d"> -->
                  <p style="color:red;"><?php  if( isset($_SESSION['Error']) ){ echo    $_SESSION["Error"];} unset($_SESSION['Error']); ?></p>
                  <p style="color:red;"><?php  if( isset($_SESSION['non-authorization']) ){ echo    $_SESSION["non-authorization"];} unset($_SESSION['non-authorization']); ?></p>
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p style="color:green" class="login-card-footer">Don't have an account? <a href="reg.php" class="text-reset" style="color:green"><b>Register here</b></a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
