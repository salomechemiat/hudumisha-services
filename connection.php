<?php  
	/*Database credentials.*/
	define("DB_SERVER","localhost");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","");
	define("DB_NAME","hudumisha");

	/*Attempt to connect to MYSQL Database*/
	$mysqli = new mysqli("localhost", "root", "", "hudumisha");

	//Check connection
	if ($mysqli==false) {
		die("ERROR: Could not connect. " . $mysqli->connect_error);
	}

	// echo "Connection Succesful. Host info: " . $mysqli->host_info;
?>