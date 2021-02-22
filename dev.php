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
$id = $con->real_escape_string($_REQUEST['id']);
$category = $con->real_escape_string($_REQUEST['category']);
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
$sql = "INSERT INTO developments (countyid,category,description,photo)
	 VALUES ('$id','$category','$description', '$filename')";
	 if(mysqli_query($con, $sql)){
	 	 header("location: profilecounty.php");
    echo '<script>alert(""Records inserted successfully.")</script>'; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

// echo $sql;

// Close connection
$con->close();
?>
