<?php

function connect(){
	return new mysqli("bg1osficxql1csllenea-mysql.services.clever-cloud.com","u3ypiypmygdjaotf","AgaySJkNqv7hpOakVdf2","bg1osficxql1csllenea");
}

function get_categorias(){
	$con = connect();
	$sql = "SELECT appointment.codcit, appointment.dates, appointment.hour, customers.codpaci, 
						customers.dnipa, customers.nombrep, customers.apellidop, doctor.coddoc, doctor.dnidoc, doctor.nomdoc, 
						doctor.apedoc, specialty.codespe, specialty.nombrees, appointment.estado FROM appointment INNER JOIN customers ON 
						appointment.codpaci=customers.codpaci INNER JOIN doctor ON appointment.coddoc=doctor.coddoc INNER JOIN specialty ON 
						appointment.codespe=specialty.codespe";
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

?>