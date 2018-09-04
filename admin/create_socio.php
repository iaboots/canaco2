<?php 
	session_start(); 
	
	$nombre    = $_POST['recipient-name'];
	$categoria = $_POST['recipient-categoria'];
	$email     = $_POST['recipient-email'];
	$rfc       = $_POST['recipient-rfc'];
	$status    = $_POST['recipient-status'];

	if ($nombre && $categoria && $email && $rfc && $status){
		// hacer algo
		include_once('control.php');

		if ($controller->create($nombre, $categoria, $email, $rfc, $status)){
			echo "ok";
		} else {
			echo "error";
		}
		
	} else {
		echo "error";
	}

?>