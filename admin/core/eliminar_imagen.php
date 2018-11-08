<?php 
	// eliminar socio
	session_start(); 
	
	$id = $_POST['id'];

	include_once('control.php');

	$deleted = $controller->delete_imagen($id);

	if ($deleted){
		echo "ok";
	} else {
		echo "error";
	}


?>