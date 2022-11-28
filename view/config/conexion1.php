<?php
	$contrasena = 'AgaySJkNqv7hpOakVdf2';
	$usuario = 'u3ypiypmygdjaotf';
	$nombrebd= 'bg1osficxql1csllenea';

	try {
		$bd = new PDO(
			'mysql:host=bg1osficxql1csllenea-mysql.services.clever-cloud.com;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>
