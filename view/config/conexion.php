<?php
	
	$mysqli = new mysqli('mysql:host=bg1osficxql1csllenea-mysql.services.clever-cloud.com', 'u3ypiypmygdjaotf', 'AgaySJkNqv7hpOakVdf2', 'bg1osficxql1csllenea');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>