<?php 
	// editar imagen
	session_start(); 
	
	$imageID = $_POST['imageID'];
	$titulo = $_POST['titulo'];
	$fecha = $_POST['fecha'];
	$liga = $_POST["liga"];

	if (isset($_POST["image"])){
		if ($_POST["image"] == 'none'){

		}
		$postfix = null;
	} else {
		$filename = $_FILES['image']['name'];
		$prefix = "../../";
		$postfix = "upload/".$filename;
		$location = $prefix.$postfix;
	}
	

	$newDate = DateTime::createFromFormat('d/m/Y', $fecha);
	$newDateString = $newDate->format('Y-m-d');	
	
	include_once('control.php');

	$image_updated = $controller->update_image( 
		$imageID, $titulo, $newDateString, $liga, $postfix
	);

	if ($image_updated != -1){
		if ($postfix != null){
			if(move_uploaded_file($_FILES['image']['tmp_name'], $location)){
				echo "ok";
			}else{
				echo "img_serv_error";
			}
		} else {
			echo "ok";
		}
	} else {
		echo "error";
	}


?>