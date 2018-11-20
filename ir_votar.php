<?php

    session_start(); 
        
    $votar_id = $_POST["votaId"];

    // hacer algo
    include_once('admin/core/control.php');

    $resp = $controller->socio_aumentar_voto($votar_id);
    

    if ($resp != 0){

        echo "ok"; 
    } else {
        echo "error";
    }



?>