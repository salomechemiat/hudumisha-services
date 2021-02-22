<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "cftdc");
  session_start();
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$email = $mysqli->real_escape_string($_REQUEST['email']);
$Password = $mysqli->real_escape_string($_REQUEST['password']);


      $sql = "SELECT * FROM citizen WHERE email= '$email' and password = '$Password'";
      
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         
		
		$_SESSION["uid"] = $row["citizenid"];
		$_SESSION["email"] = $row["email"];
		$status=$row["status"];
       if($status=="1"){
	    header("location: profile.php");
		}
		else{
			$_SESSION["non-authorization"]="You are not authorized to go";
			header("location: main.php");
		}
	}

	// else{
	// 	$_SESSION["Error"]="Invalid Password or Username";
	// 		header("location: loginform.php");
	// }

	
else{
$email = $mysqli->real_escape_string($_REQUEST['email']);
$Password = $mysqli->real_escape_string($_REQUEST['password']);


      $customer_sql = "SELECT * FROM governor WHERE email= '$email' and password = '$Password'";
      
      $cresult = mysqli_query($mysqli,$customer_sql);
      $crow = mysqli_fetch_array($cresult,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($cresult);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         
		
		$_SESSION["uid"] = $crow["countyuserid"];
		$_SESSION["email"] = $crow["email"];
		$status=$crow["status"];
       if($status=="1"){
	    header("location: profilecounty.php");
		}
		else{
			$_SESSION["non-authorization"]="You are not authorized to go";
			header("location: main.php");
		}
	}
	 else{
	
      $email = $mysqli->real_escape_string($_REQUEST['email']);
      $Password = $mysqli->real_escape_string($_REQUEST['password']);


      $admin_sql = "SELECT * FROM admin WHERE email= '$email' and password = '$Password'";
      
      $adin_result = mysqli_query($mysqli,$admin_sql);
      $admin_row = mysqli_fetch_array($adin_result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($adin_result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         
		
	    $_SESSION["uid"] = $admin_row["AdminId"];
		$_SESSION["email"] = $admin_row["email"];
		// $status=$row["status"];
       if($admin_sql==true){
	    header("location: admin/index2.php");
		}
		else{
			$_SESSION["non-authorization"]="You are not authorized to go";
			header("location: main.php");
		}
	}

}
}

	
// else{
// 	$email = $mysqli->real_escape_string($_REQUEST['email']);
//     $Password = $mysqli->real_escape_string($_REQUEST['password']);


//       $sequel = "SELECT * FROM admin WHERE email= '$email' and idno = '$Password'";
      
//       $admin_result = mysqli_query($mysqli,$sql);
//       $admin_row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
//       $count = mysqli_num_rows($admin_result);
      
//       // If result matched $myusername and $mypassword, table row must be 1 row
		
//       if($count == 1) {

         
		
// 		// $_SESSION["uid"] = $row["empid"];
// 		$_SESSION["email"] = $admin_row["email"];
// 		if($sequel== true)
// 		{
// 			header("location:admin.php")
// 		}

// 	// 	$status=$row["status"];
//  //       if($status=="1"){
// 	//     header("location: myprofile.php");
// 	// 	}
// 	// 	else{
// 	// 		$_SESSION["non-authorization"]="You are not authorized to go";
// 	// 		header("location: loginform.php");
// 	// 	}
// 	// }
// 	else{
// 		$_SESSION["Error"]="Invalid Password or Username";
// 			header("location: loginform.php");
// 	}
	

	// 	$User=$_SESSION["uid"];
	//     $query = "SELECT * FROM type WHERE empid=$User";
	//     $rslt = mysqli_query($mysqli,$query);
 //        $rw = mysqli_fetch_array($rslt,MYSQLI_ASSOC);
      
      
 //       $cnt = mysqli_num_rows($rslt);
	//    if($cnt == 1) {
 //       $_SESSION["utype"] = $rw["type"];
	//    if($rw["type"]=='admin'){
				
	//     header("location: admin.php");}
	//     else if($rw["type"]=='customer'){
	// 	header("location: myprofile.php");}
	// 	else if($rw["type"]=='employee'){
	// 	header("location: client.php");}
	//    }
 //      }else {
	// 	 $_SESSION['Error']="Invalid  Username or Password!";
 // header("location: loginform.php");
		


      
  
   
   
?>