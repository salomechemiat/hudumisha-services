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

      // $user=$_SESSION['uid'];
     $countyid = $_GET['countyid'];
     if( ! is_numeric($countyid) )
     die('invalid county id');
     $sql=" SELECT * FROM county WHERE countyid = $countyid LIMIT 0 , 30"      
      $result = mysqli_query($mysqli,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
  $countyname = $row['countyname'];
  $email = $row['email'];
  
}


mysqli_close($con);
?>