<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="#">
	<style>
	.bg2
	{
		background-image: url('home8.jpg');
		background-image: url("home8.jpg");

    /* Full height */
        height: 100vh; 

    /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;


	}
	.container
	{
	  background-color:#ffccff;
	  width:100%;
	  color: black;
      padding: 10px 25px;
      padding-bottom: 5px;
      font-size: 25px;
     

	}
	.hero-text
	{
		font-size:40px;
		justify-content: center;
	}

   </style>
	<?php
	if(isset($_POST['submit'])){
	include ("connection.php");
	$name  = $_POST ["user"];
	$sname = $_POST["username"];
	$email = $_POST["mail"];
	$idnum = $_POST ["idn"];
	$pass  = $_POST["psw"];

	$sql = "INSERT INTO admin (firstName, secondName ,email, idNo, password) VALUES ( '$name' , '$sname', '$email' , '$idnum' , '$pass')";

	if (mysqli_query ($con, $sql)){
				echo "Data added successfully";
			}
			else {
				echo "something went worng";
			}

}
	
	

	
	?>
</head>

<body>
	<section class="bg2">
    <div>
    	<h1 class="hero-text">Hudumisha services</h1>
	<div class="container" >
    <div class="page-header" class="hero-image">
			
			<h2 class="hero-text">Add an Admin</h2>
	
	<div class="jumbotron">

	<form id='submit' action="add.php" method ="POST">
		
		

		First Name : <input type ="text" name="user"><br><br>
		SecondName : <input type ="text" name="username"><br><br>
		Email : <input type ="text" name="mail"><br><br>
		ID_Number : <input type ="name" name="idn"><br><br>
		Password : <input type ="password" name="psw"><br><br>
		<input type ="submit" name="submit" value=" Add info"><br><br>

		
	</form>
</div>
</div>
</div>
</div>
</section>
	
</body>
</html>