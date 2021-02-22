<?php
session_start();
$uid=$_SESSION['uid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Hudumisha Services| Edit</title>
   <link rel="shortcut icon" type="image.PNG" href="logo3.PNG" >
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css" media="screen">
<style>
.navbar
{
	
	width:100%;
}

</style>
	
</style>
</head>
<body>

     <section class="nav"  style="background-color: black;">

	<nav style="display: flex; flex-direction: row;" class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">

              <a class="navbar-brand" href="#">Hudumisha services</a>
        </div>
    <ul style="display: flex; flex-direction: row; " class="nav navbar-nav">
       <li ><a style="margin-left: 10px; margin-right: 10px;" href="index.php">Home</a></li>
       <li><a  style="margin-left: 100px; margin-right: 100px;" href="dashboard.php">Services</a></li>
       <!-- <li><a href="#">Help</a></li> -->
       <!-- <li><a href="dashboard">Employee</a></li> -->
      <li><a href="myprofile.php">profile</a></li>
   </ul>
    
   <!--  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginform.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->
 

       </div>
    </nav>

     <a style="margin-left: 700px; " href="logout.php" class="btn btn-danger square-btn-adjust"><span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
       </div>
    </nav>
</section>
	<div class="container-contact100">
		<div class="wrap-contact100">
       
			<form style="margin-top: -50px;" action="customeredit.php" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
                 

				<span class="contact100-form-title">
					Edit Profile
				</span>
				 
               <h3>select image: </h3> <br><br>
               <input type='file' name='image'> <br><br>
              <!--  <input type="submit" name="" class="button"/><br><br> -->

              <input type="text" value="<?php echo $uid?>" name="id" hidden>
				<label class="label-input100" for="first-name">Location</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="constituency" placeholder="constituency">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="ward" placeholder="Ward">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Email </label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder=" +1 800 000000">
					<span class="focus-input100"></span>
				</div>
                
                <!-- <label class="label-input100" for="phone">Charges per hour</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="message" placeholder=" EG. I charge Ksh.50 per hour">
					<span class="focus-input100"></span>

				</div> -->
				 	 <button class="btn btn-primary" style="margin-bottom: 20px; margin-top: 20px; width: 200px;"  type="submit" name="edit">Edit profile</button>
				 	 <!-- <a style="margin-bottom: 20px; width: 200px;"  class="btn btn-primary">Edit profile</a>
 -->
					<input id="phone" class="input100" type="hidden"   name="id" placeholder=" +1 800 000000">
					<span class="focus-input100">

				

			

			</form>

   </span></form><div class="contact100-more flex-col-c-m" style="background-image: url('home5.jpg');"></div></div>
		
				<!-- <div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div> -->

				<!-- <div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

 -->

 
	

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
