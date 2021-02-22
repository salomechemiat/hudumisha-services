<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CFTDC| Login</title>
  <link rel="shortcut icon" type="image.PNG" href="images/logo.PNG" >
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="style.css" />

	<link rel="shortcut icon" type="image.PNG" href="Images/logo.PNG" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	
  <link rel="stylesheet" type="text/css" href="//static.squarespace.com/universal/styles-compressed/commerce-a840ee3a77201db5c548717bab21806d-min.css"/><script crossorigin="anonymous" src="//static.squarespace.com/universal/scripts-compressed/performance-640e8da32fb70273b069-min.en-US.js" defer ></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script type="text/javascript">
$(document).ready(function(){
$.get("login.php",function(data){
$(".error").html(data);
});
});

</script>
<body>
 <section id="up" class="a" style="padding-bottom: -30px;">

	 <nav class="navbar navbar-inverse" style="background-color: #ff914d; border-color: #ff914d">
        <div class="container-fluid">
        <div class="navbar-header">

             <img src="images/logo.png" alt="image not found" style="width:15%; margin-left: -15px;">
              <div>
           <a class="navbar-brand" href="#" style="color: white; margin-left: 15%;margin-top: -12%;" >CFTDC</a>
        </div>
        </div>
       
    <ul  style="margin-left:30%" class="nav navbar-nav">
      <li class="nav1"><a href="#" style="color: white">Home</a></li>
       <li class="nav1"><a href="#down" style="color: white">Counties</a></li>
       <!-- <li><a href="#">Help</a></li> -->
       <!-- <li><a href="dashboard">Employee</a></li> -->
      <li class="nav1"><a href="#about" style="color: white">About us</a></li>
   </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="empsign.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginform.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
 

       </div>
    </nav>
</section style="">
   
		<div >
			<div id="form">
				<form class="form" action="login.php" method="POST" accept-charset="utf-8">
					<div class="input">
						<input class="lastname" type="text" name="email" value="" placeholder="Enter your Email">
					</div>
					<div class="input">
						<input class="pass" type="password" name="password" value="" placeholder="Enter Password">
					</div>
					<input class="lastname" type="hidden" name="uid" value="hidden" placeholder="Enter your Email">
					<input class="lastname" type="hidden" name="utype" value="hidden" placeholder="Enter your Email">
					<p style="color:red;"><?php  if( isset($_SESSION['Error']) ){ echo    $_SESSION["Error"];} unset($_SESSION['Error']); ?></p>
					<p style="color:red;"><?php  if( isset($_SESSION['non-authorization']) ){ echo    $_SESSION["non-authorization"];} unset($_SESSION['non-authorization']); ?></p>
				<!-- <p>Not yet Signed up? <a href="signup.php">Sign up here</a></p> -->
					<!-- <div class="input"> -->
						<button class="input button" type="submit" name="submit">Log in</button>
					<!-- </div> -->
				</form>
			</div>
			<div >
				<p class="register">New to CFTDC
					? <span><a href="signup.php" class="a">Create an account</a></span></p>
			</div>
		</div>
		<div id="header">
			<img src="images/logo.PNG" alt="" style="width: 300px">
			<p>Let's do this</p>
			<p>Login with CFTDC in seconds </p>
		</div>

		<!--  -->
</body>

</html>