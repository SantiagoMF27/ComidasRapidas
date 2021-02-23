<?php 
//Aseguramos la sesion de usuario

session_start();
if (isset($_SESSION['email'])) {
    if ($_SESSION["id_tipo_user"] == 1) {
        header("location: admin.php");
        }
    }else if (!isset($_SESSION['email'])) {
        header("location: index.php");
        session_destroy();
    }
?>
