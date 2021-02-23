<?php 
//Aseguramos la sesion de administrador

session_start();
if (isset($_SESSION['email'])) {
    if ($_SESSION["id_tipo_user"] == 2) {
        header("location: inicio_usuario.php");
        }
    }else if (!isset($_SESSION['email'])) {
        header("location: index.php");
        session_destroy();
    }
?>
