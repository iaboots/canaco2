<?php 
	session_start(); 
	
	$activo    = $_POST['activo'];
	$year    = $_POST['year'];
	$dateIni = $_POST['dateIni'];
	$dateFin     = $_POST['dateFin'];
	$seePageNom     = $_POST['seePageNom'];
	$seePageRes     = $_POST['seePageRes'];
	$mensaje     = $_POST['mensaje'];

	$newDateIni = DateTime::createFromFormat('d/m/Y', $dateIni);
	$newDateIniString = $newDateIni->format('Y-m-d');	

	$newDateFin = DateTime::createFromFormat('d/m/Y', $dateFin);
	$newDateFinString = $newDateFin->format('Y-m-d');	

	// hacer algo
	include_once('control.php');

	$resp = $controller->update_votacion(
		$activo, $year, $newDateIniString, $newDateFinString, 
		$seePageNom, $seePageRes, $mensaje
	);

	if ($resp){
		echo "ok";
	} else if ($resp == 0){
		echo "sincambios";
	} else {
		echo "error";
	}
		

?>