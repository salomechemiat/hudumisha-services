 <?php  
	/*Database credentials.*/
	define("DB_SERVER","localhost");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","");
	define("DB_NAME","cftdc");

	/*Attempt to connect to MYSQL Database*/
	$mysqli = new mysqli("localhost", "root", "", "cftdc");

	//Check connection
	if ($mysqli==false) {
		die("ERROR: Could not connect. " . $mysqli->connect_error);
	}

	// echo "Connection Succesful. Host info: " . $mysqli->host_info;
?>