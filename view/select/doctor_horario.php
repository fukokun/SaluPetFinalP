<?php

$conexion = mysqli_connect("bg1osficxql1csllenea-mysql.services.clever-cloud.com","u3ypiypmygdjaotf","AgaySJkNqv7hpOakVdf2","bg1osficxql1csllenea");

$el_horario = $_POST['horario'];

$query = $conexion->query("SELECT * FROM horario WHERE coddoc = $el_horario");



while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codhor']. '">' . $row['nomhor'] . '</option>' . "\n";
}
