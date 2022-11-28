<?php

$conexion = mysqli_connect("bg1osficxql1csllenea-mysql.services.clever-cloud.com","u3ypiypmygdjaotf","AgaySJkNqv7hpOakVdf2","bg1osficxql1csllenea");

$query = $conexion->query("SELECT * FROM specialty");

echo '<option value="0">Seleccione la especialidad</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codespe']. '">' . $row['nombrees'] . '</option>' . "\n";
}



