<?php
    session_start();
    include_once('core/control.php');

    if (isset($_POST['inputUsuario']) && isset($_POST['inputPassw'])){
        $inputUsuario = $_POST['inputUsuario'];
        $inputPassw = $_POST['inputPassw'];
    } else {
        echo "error";
        return;
    }

    $result = $controller->comprobar_login($inputUsuario, $inputPassw); 
    

    if (boolval($result)){
        $rol = $result['rol'];
        switch ($rol) {
            case '1':
                # 1 es administrador
                $_SESSION['rol'] = 1; // administrador
                break;
            
            case '2':
                # 2 es invitado
                $_SESSION['rol'] = 2; // capturista
                break;
            
            default:
                # code... sin codigo
                $_SESSION['rol'] = 100; // invitado
                break;
        }

        $_SESSION['usuario'] = $inputUsuario;

        echo '0'; // si existe el usuario
    } else {
        echo '1'; // no se encuentra usuario y contraseña
    }
?>