<?php
	#Session start
	session_start();
	#Include the connectoin file
	require_once 'connection.php';
	#Define variables and initialize them with empty values
	$idno = $passord= "";
	$idno_err = $password_err="";
	#Processsing form data when the form is submitted
	if ($_SERVER["REQUEST_METHOD"]== "POST"){
		#Check if housenumber is empty
		if (empty(trim($_POST["idno"]))){
			$idno_err = "Please enter your ID number";
		}else{
			$idno = trim($_POST["idno"]);
		}
		#Check if pin is empty
		if (empty(trim($_POST["password"]))){
			$password_err = "Please enter the correct password";
		}else{
			$password = trim($_POST["password"]);
		}
		#Validate cresentials
		if (empty($idno_err)&& empty($password_err)){
			#Prepare a select statement
			$sql = "SELECT firstname,idno,password,category,userid FROM customer WHERE idno=?";
			if ($stmt = $mysqli->prepare($sql)) {
				#Bind variables to the prepared statement as parameters
				$stmt->bind_param("s",$param_idno);
				#Set the parameters
				$param_idno = $idno;
				#Attempt to execute the prepared statement
				if($stmt->execute()){
					#Store results
					$stmt->store_result();
					#Check if housenumber exists and if yes verify pin
					if($stmt->num_rows == 1){
						#Bind the results variable
						$stmt->bind_result($result_userid,$result_idno,$hashed_password,$result_firstname,$result_category);
						while ($stmt->fetch()) {
							# Store session variables
							$userId = $result_userid;
							$IDno = $result_idno;
							$name = $result_firstname;
							$cat = $result_category;
							if(password_verify($password, $hashed_password)){
								if ($cat=="customer") {
									# code...
									session_start();
									$_SESSION["userid"]=$userId;
									// $_SESSION["houseNo"]=$houseNo;
									$_SESSION["firstname"] = $name;
									header("location: home.php");
								}else{
									#Password correct
									#Start a new session
									// session_start();
									// $_SESSION["userId"]=$userId;
									// $_SESSION['userName']= $userName;
									// $_SESSION["name"] = $name;
									// header("location:dashboard.php");
								}
								
							}else{
								#Display an error message
								$password_err = "Incorrect Password";
							}
						}

						// if ($stmt->fetch()) {
						// 	if(password_verify($pin, $hashed_pin)){
						// 		#Password correct
						// 		#Start a new session
						// 		// session_start();
						// 		echo $userId;
						// 		$_SESSION["userId"]=$userId;
						// 		// $_SESSION["houseNo"]=$houseNo;
						// 		$_SESSION["name"] = $name;
						// 		// header("location:dashboard.php");
						// 	}else{
						// 		#Display an error message
						// 		$pin_err = "Incorrect Pin";
						// 	}
						// }
					}else{
						// $housenumber_err = "No account found with that house number";
					}
				}else{
					echo "Ooops:( Something went wrong. Please try again later";
				}

			}
			#Close statement
			$stmt->close();
			
		}
		#Close connection
		$mysqli->close();
	}
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hudumisha| Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	</head>
	<body>
		<div id="header">
			<img src="logo4.PNG" alt="">
			<p>Let's do this</p>
			<p>Login with Hudumisha in seconds </p>
		</div>
		<div id="main">
			<div id="form">
				<form class="form" action="" method="post" accept-charset="utf-8">
					<div class="input">
						<input class="lastname" type="text" name="idno" value="" placeholder="ID Number">
					</div>
					<div class="input">
						<input class="pass" type="password" name="password" value="" placeholder="Password">
					</div>
					<!-- <div class="input"> -->
						<button class="input button" type="submit" name="submit">Log in</button>
					<!-- </div> -->
				</form>
			</div>
			<div id="login">
				<p class="register">New to Hudumisha? <span><a href="Emp-login.html" class="a">Create an account</a></span></p>
			</div>
		</div>
		<!--  -->
	</body>
</html>