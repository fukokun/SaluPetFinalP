<?php
$hostname_conex = "bg1osficxql1csllenea-mysql.services.clever-cloud.com";
$database_conex = "bg1osficxql1csllenea";
$username_conex = "u3ypiypmygdjaotf";
$password_conex = "AgaySJkNqv7hpOakVdf2";
// creación de la conexión a la base de datos con mysql_connect()
$conex = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or 
die ("No se ha podido conectar al servidor de Base de datos"); 

?>
