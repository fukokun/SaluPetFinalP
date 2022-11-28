<?php
session_start();

// Define database
define('dbhost', 'bg1osficxql1csllenea-mysql.services.clever-cloud.com');
define('dbuser', 'u3ypiypmygdjaotf');
define('dbpass', 'AgaySJkNqv7hpOakVdf2');
define('dbname', 'bg1osficxql1csllenea');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
