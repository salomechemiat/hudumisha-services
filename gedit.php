<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$con = new mysqli("localhost", "root", "", "cftdc");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . $con->connect_error);
}
 
// Escape user inputs for security
session_start();
$username = $con->real_escape_string($_REQUEST['username']);
$city = $con->real_escape_string($_REQUEST['city']);
$email = $con->real_escape_string($_REQUEST['email']);
$phonenumber = $con->real_escape_string($_REQUEST['phonenumber']);
$country = $con->real_escape_string($_REQUEST['country']);
$description = $con->real_escape_string($_REQUEST['description']);
// $filename = $con->real_escape_string($_REQUEST['image']);

$filename = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
$filetype = $_FILES['image']['type'];
$filesize = $_FILES['image']['size'];
$filepath = "uploads/" .$filename;
move_uploaded_file($file_tmp, $filepath);

$id = $_SESSION["uid"];

// $smallprice = $coSn->real_escape_string($_REQUEST['smallprice']);
// $mediumprice = $con->real_escape_string($_REQUEST['mediumprice']);
// $largeprice = $con->real_escape_string($_REQUEST['largeprice']);

// $small = $con->real_escape_string($_REQUEST['small']);
// $medium = $con->real_escape_string($_REQUEST['medium']);
// $large = $con->real_escape_string($_REQUEST['large']);


$sql="UPDATE `governor` SET `email`='$email',`description`='$description',`photo`='$filename'   WHERE `countyuserid`='$id'";
// attempt insert query execution

if($con->query($sql) === true){

	unset($_SESSION['email']);
			$_SESSION['email']=$email;
			 header("location:profilecounty.php");
			 
			 

			 }
		
	 else{
    echo "ERROR: Could not to execute $sql. " . $con->error;
}
 
// Close connection
$con->close();
?>
