<?php 
	session_start(); 
	
	$nombre    = $_POST['recipient-name'];
	$categoria = $_POST['recipient-categoria'];
	$email     = $_POST['recipient-email'];
	$rfc       = $_POST['recipient-rfc'];
	$status    = $_POST['recipient-status'];

	if ($status == "Activado"){
		$status = 1;
	} else {
		$status = 0;
	}

	if ($nombre && $categoria && $email && $rfc){
		// hacer algo
		include_once('control.php');

		$response = $controller->create_socio($nombre, $categoria, $email, $rfc, $status);

		if ($response){
			echo "ok";
		} else {
			echo "error";
		}
		
	} else {
		echo "error";
	}

?>