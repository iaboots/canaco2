<?php

	$email_send    = "canacotest@gmail.com";
	$user_password = "coniec22*";
	$email_subject = "Contacto desde el sitio web";

	$usuario_nombre    = $_POST['name'];
	$usuario_email     = $_POST['email'];
	$usuario_asunto    = $_POST['subject'];
	$usuario_mensaje   = $_POST['message'];

    $error = "";
      try{

          $html = " <!DOCTYPE html>
          <html>
          <head>
          	<title></title>
          </head>
          <body>

          <strong>Nombre: </strong> $usuario_nombre <br>
          <strong>Email: </strong>  $usuario_email <br>
          <strong>Asunto: </strong> $usuario_asunto <br>
          <strong>Mensaje: </strong> $usuario_mensaje 
          
          </body>
          </html>";

          
          $to =  $email_send ;
          $subject = $email_subject;
          $message = "Nuevo";

          // Always set content-type when sending HTML email
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
          $headers .= 'From: <conaco-page@gmail.com>' . "\r\n";
   
          if (mail($to,$subject,$html,$headers)){
              echo 1;
            }
      }
      catch (Exception $e){   
          echo 0;
          $error.="Tuvimos una excepcion! \n";
          $error.=  $e->getMessage();
          $error.= $e->getLine();
      }
	    
?>
