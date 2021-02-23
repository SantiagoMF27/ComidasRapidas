<?php
//Aactualizar registro desde administrador

extract($_POST);
include_once('../controllers/conexion.php');
include_once('../controllers/helps.php');

//Acualizar Usuario
if (isset($_POST['actualizarusuario'])) {
	$nombre       = validar_campo(trim($_POST['nombre']));
	$apellido     = validar_campo(trim($_POST['apellido']));
	$email        = validar_campo(trim($_POST['email']));
	$usuario      = validar_campo(trim($_POST['usuario']));
	$contrasena   = sha1(validar_campo(trim($_POST['contrasena'])));
	$id_tipo_user = validar_campo(trim($_POST['id_tipo_user']));

	$sentencia = ("UPDATE usuario 
	SET nombre = '$nombre', apellido = '$apellido', email = '$email', usuario = '$usuario', contrasena = '$contrasena', id_tipo_user = '$id_tipo_user' 
	WHERE id_usuario = '$id_usuario'")or die($conexion -> error);
	$resent = mysqli_query($conexion, $sentencia);
	if ($resent == null) {
		echo '<script>alert("No se Actualizo el Usuario")</script> ';
		echo "<script>location.href='../view/admin.php'</script>";
	}else {
		echo '<script>alert("Usuario Actualizado Correctamente")</script> ';	
		echo "<script>location.href='../view/tabla_Usuarios.php'</script>";
	}
}


//Actualizar Productos
	if (isset($_POST['actualizarproducto'])) {
        $nombre      = validar_campo(trim($_REQUEST['nombre']));
        $precio      = validar_campo(trim($_POST['precio']));
        $existencias = validar_campo(trim($_POST['existencias']));
        $descripcion = validar_campo(trim($_POST['descripcion']));
        $nombre_img  =  $_FILES['imagen']['name'];//Contiene el nombre
        $archivo     =  $_FILES['imagen']['tmp_name'];//Contiene el archivo
        $ruta        = "../img/".$nombre_img;
        $activado    = validar_campo(trim($_POST['activado']));
		
		
		move_uploaded_file($archivo,$ruta);

	$sentencia=("UPDATE producto 
    SET nombre = '$nombre', precio = '$precio', existencias = '$existencias', descripcion = '$descripcion', foto = '$ruta', activado = '$activado' 
	WHERE id_producto = '$id_producto'")or die($conexion -> error);

	$resent = mysqli_query($conexion, $sentencia);
	if ($resent == null) {
		echo '<script>alert("No se Actualizo el Producto")</script> ';
		echo "<script>location.href='../view/admin.php'</script>";
	}else {
		echo '<script>alert("Producto Actualizado Correctamente")</script> ';	
		echo "<script>location.href='../view/tabla_productos.php'</script>";
	}
}
?>
