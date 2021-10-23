<?php
	session_start();

	// Define database
	define('dbhost', 'axies.cfky5hslylq4.us-east-2.rds.amazonaws.com');
	define('dbuser', 'axies');
	define('dbpass', 'axies1234');
	define('dbname', 'rent');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
