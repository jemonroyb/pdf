<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'empresa');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>