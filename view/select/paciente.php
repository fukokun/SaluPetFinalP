<?php

$conexion = mysqli_connect("bg1osficxql1csllenea-mysql.services.clever-cloud.com","u3ypiypmygdjaotf","AgaySJkNqv7hpOakVdf2","bg1osficxql1csllenea");

$query = $conexion->query("SELECT * FROM customers");

echo '<option value="0">Seleccione el paciente</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codpaci']. '">' . $row['nombrep'] . '</option>' . "\n";
}



