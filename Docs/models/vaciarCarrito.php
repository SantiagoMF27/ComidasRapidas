<?php 
//Vaciamos el carrito
session_start();

if (isset($_SESSION['carrito'])) {
    unset($_SESSION['carrito']);
    header("location: ../view/carrito.php");
}else{
    header("location: ../view/inicio_usuario.php");
}

?>