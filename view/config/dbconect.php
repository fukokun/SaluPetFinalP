<?php

Class Connection{
 
	private $server = "mysql:host=bg1osficxql1csllenea-mysql.services.clever-cloud.com;dbname=bg1osficxql1csllenea";
	private $username = "u3ypiypmygdjaotf";
	private $password = "AgaySJkNqv7hpOakVdf2";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "Hubo un problema con la conexión: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}
 
?>