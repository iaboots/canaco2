<?php 
	// editar noticia
	session_start(); 
	
	//echo var_dump($_POST);
	//return; 
	$form = $_POST["formNoticia"];
	$params = array();
	parse_str($form, $params);
	
	$noticiaID = $params['noticia_id'];
	$noticiaTitulo = $params['inputTitulo'];
	$noticiaFuente = $params['inputFuente'];
	$editorText = $_POST["editorText"];
	
	include_once('control.php');

	$noticia_edit = $controller->update_noticia( $noticiaID, $noticiaTitulo, $noticiaFuente, $editorText );

	if ($noticia_edit != -1){
		echo "ok";
	} else {
		echo "error";
	}


?>