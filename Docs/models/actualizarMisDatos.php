<?php 
//Actualizar mis datos
session_start();
include_once('../controllers/conexion.php');
include_once('../controllers/helps.php');

if (isset($_POST['cambiar-datos'])) {
    $nombre       = validar_campo(trim($_POST['nombre']));
	$apellido     = validar_campo(trim($_POST['apellido']));
	$email        = validar_campo(trim($_POST['email']));
	$usuario      = validar_campo(trim($_POST['usuario']));
	$contrasena   = sha1(validar_campo(trim($_POST['contrasena'])));
    $id_tipo_user = 2;
    
        $sentencia = ("UPDATE usuario 
        SET nombre = '$nombre', apellido = '$apellido', email = '$email', usuario = '$usuario', contrasena = '$contrasena', id_tipo_user = '$id_tipo_user' 
        WHERE id_usuario = ".$_GET['id_usuario'])or die($conexion -> error);
            $resent = mysqli_query($conexion, $sentencia);
            
            if ($resent == null) {
                echo '<script>alert("No se Actualizo")</script> ';
                echo "<script>location.href='../view/inicio_usuario.php'</script>";
            }else {
                echo '<script>alert("Actualizado Correctamente")</script> ';	
                echo "<script>location.href='../view/mis_datos.php'</script>";
            }
    }
?>