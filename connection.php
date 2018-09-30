<?php
$con = mysqli_connect("localhost","root","","hudumisha_services");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "This is it";
  }
?>