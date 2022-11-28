<?php
function conectar(){
$conexion=null;
$host='bg1osficxql1csllenea-mysql.services.clever-cloud.com';
$db='bg1osficxql1csllenea';
$user = "u3ypiypmygdjaotf";
$pass= "AgaySJkNqv7hpOakVdf2";
try {
  $conexion= new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);


} catch (PDOException $e) {
  echo '<p> No se puede conectar a la base de datos </p>';
  exit;
}
return $conexion;


}

 ?>
