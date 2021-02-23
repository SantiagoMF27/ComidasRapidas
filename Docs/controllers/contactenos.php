<?php
//Contactanos

//coreo que recibira el mensage
    $destinatario = 'smanosalva2002@gmail.com';
    $nombre  = $_POST['name'];
    $email   = $_POST['email'];
    $asunto  = $_POST['asunto'];
    $mensaje = $_POST['msg'];
    $header  = "Enviado desde Comidas Sunafonson";
    $mensajeCompleto = "Nombre: " . $nombre ."\nCorreo: " . $email . "\nAsunto: " . $asunto . "\nMensaje" . $mensaje;
    mail($destinatario, $asunto, $mensajeCompleto, $header);

        echo "<script> alert('¡¡Mensaje Enviado Exitosamente!!') </script>";
        echo "<script> setTimeout(\"location.href='../view/contacto.php'\",1000) </script>";

?>