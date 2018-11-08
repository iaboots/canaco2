<?php 
	session_start(); 

	$form = $_POST['formNoticia'];
	$params = array();
	parse_str($form, $params);
	
	$titulo    	= $params['inputTitulo'];
	$fuente     = $params['inputFuente'];
	$noticia 	= $_POST['editorText'];

	include_once('control.php');

	if ($controller->create_noticia( $titulo, $noticia, $fuente )){
		echo "ok";
	} else {
		echo "error";
	}
		

?>