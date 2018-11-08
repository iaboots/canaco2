<?php 
	// editar imagen
	session_start(); 
	
	//$form = $_POST["formNoticia"];
	//$params = array();
	//parse_str($form, $params);
	
	$imageID = $_POST['id'];
	$titulo = $_POST['titulo'];
	$fecha = $_POST['fecha_limite'];
	$liga = $_POST["liga"];

	$newDate = DateTime::createFromFormat('d/m/Y', $fecha);
	$newDateString = $newDate->format('Y-m-d');	
	
	include_once('control.php');

	$image_updated = $controller->update_image( 
		$imageID, $titulo, $newDateString, $liga 
	);

	if ($image_updated != -1){
		echo "ok";
	} else {
		echo "error";
	}


?>