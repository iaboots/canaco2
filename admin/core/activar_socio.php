<?php 
	// activar socio

	// tipo de respuesta json
	header('Content-Type: application/json');
	session_start(); 
	include_once( 'control.php' );

	$id = $_POST['user_id'];
	$accion = $_POST['accion'];
	$data = array();

	$response = false;
	if ($accion == "activar"){
		$response = $controller->activate_socio($id);
	} else if ($accion == "desactivar"){
		$response = $controller->deactivate_socio($id);
	} else {
		// error accion no conocida
	}

	if ( $response ){
		$data["resp"] = "ok";
	} else {
		$data["resp"] = "error";
		$data["msj"] = "Error en el if";
	}

	// Envio de respuesta
	echo json_encode($data);

?>