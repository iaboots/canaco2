<?php 
	session_start(); 

	$filename = $_FILES['image']['name'];
	$prefix = "../../";
	$postfix = "upload/".$filename;
	$location = $prefix.$postfix;
	$uploadOk = 1;
	$imageFileType = pathinfo($location, PATHINFO_EXTENSION);

	/* Valid Extensions */
	$valid_extensions = array("jpg","jpeg","png");
	/* Check file extension */
	if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
		echo "img_ext_error";
		return;
	}
	
	$titulo    	= $_POST['titulo'];
	$fecha     = $_POST['fecha'];
	$liga 	= $_POST['liga'];

	$newDate = DateTime::createFromFormat('d/m/Y', $fecha);
	$newDateString = $newDate->format('Y-m-d');	

	include_once('control.php');

	if ($controller->create_images( $titulo, $postfix, $newDateString, $liga )){
		if(move_uploaded_file($_FILES['image']['tmp_name'], $location)){
			echo "ok";
		 }else{
			echo "img_serv_error";
		 }
	} else {
		echo "error";
	}
		

?>