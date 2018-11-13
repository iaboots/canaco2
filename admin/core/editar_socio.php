<?php 
	session_start(); 
	
	$id    = $_POST['inputHiddenId'];
	$nombre    = $_POST['recipient-name'];
	$categoria = $_POST['recipient-categoria'];
	$email     = $_POST['recipient-email'];
	$rfc       = $_POST['recipient-rfc'];
	$status    = $_POST['recipient-status'];

	// hacer algo
	include_once('control.php');

	$resp = $controller->update_socio($id, $nombre, $categoria, $email, $rfc, $status);

	if ($resp){
		echo "ok";
	} else if ($resp == 0){
		echo "sincambios";
	} else {
		echo "error";
	}
		

?>