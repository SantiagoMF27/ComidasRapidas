<?php 
//Registro de usuario

include_once('conexion.php');
include_once('helps.php');

if (isset($_POST['registrar'])) {
    if (strlen($_POST['txtNombre'])   >= 1 && 
        strlen($_POST['txtApellido']) >= 1 &&
        strlen($_POST['txtEmail'])    >= 1 && 
        strlen($_POST['txtUsuario'])  >= 1 &&
        strlen($_POST['txtPassword']) >= 1) {

        $nombre       = validar_campo(trim($_POST['txtNombre']));
        $apellido     = validar_campo(trim($_POST['txtApellido']));
        $email        = validar_campo(trim($_POST['txtEmail']));
        $usuario      = validar_campo(trim($_POST['txtUsuario']));
        $contrasena   = sha1(validar_campo(trim($_POST['txtPassword'])));
        $fecha_reg    = date('y/m/d');
        $id_tipo_user = 2;

        $consulta   = ("INSERT INTO usuario (nombre, apellido, email, usuario, contrasena, id_tipo_user, fecha_registro) 
        VALUES ('$nombre','$apellido','$email','$usuario','$contrasena', '$id_tipo_user', '$fecha_reg')")or die($conexion -> error);
        $resultado  = mysqli_query($conexion,$consulta);

    }if ($resultado == true) {
        echo '<script>alert("¡Te has Registrado Exitosamente!")</script> ';
        echo "<script>location.href='../view/ingresar.php'</script>";
    }else if ( ($resultado == false) ) {
        echo '<script>alert("¡No te has Registrado!")</script> ';
        echo "<script>location.href='../view/registrarse.php'</script>";
    }
}
?>