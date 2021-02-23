<?php
//Agregar registro desde administrador

include_once('../controllers/conexion.php');
include_once('../controllers/helps.php');

//Agregar Usuarios
if (isset($_POST['agregarusuarios'])) {
    if (strlen($_POST['nombre'])       >= 1 && 
        strlen($_POST['apellido'])     >= 1 &&
        strlen($_POST['email'])        >= 1 && 
        strlen($_POST['usuario'])      >= 1 &&
        strlen($_POST['contrasena'])   >= 1 &&
        strlen($_POST['id_tipo_user']) >= 1) {

        $nombre       = validar_campo(trim($_POST['nombre']));
        $apellido     = validar_campo(trim($_POST['apellido']));
        $email        = validar_campo(trim($_POST['email']));
        $usuario      = validar_campo(trim($_POST['usuario']));
        $contrasena   = sha1(validar_campo(trim($_POST['contrasena'])));
        $fecha_reg    = date('y/m/d');
        $id_tipo_user = validar_campo(trim($_POST['id_tipo_user']));

        $consulta   = ("INSERT INTO usuario (nombre, apellido, email, usuario, contrasena, id_tipo_user, fecha_registro) 
        VALUES ('$nombre','$apellido','$email','$usuario','$contrasena', '$id_tipo_user', '$fecha_reg')")or die($conexion -> error);
        $resultado  = mysqli_query($conexion,$consulta);

}
if ($resultado == true) {
    echo "<script>location.href='../view/tabla_usuarios.php'</script>";
}else{
    echo '<script>alert("¡Usuario No Agregado!")</script> ';
    echo "<script>location.href='../view/agregar_usuario.php'</script>";
}
}


//Agregar Productos
if (isset($_POST['agregarproducto'])) {
        $nombre      = validar_campo(trim($_REQUEST['nombre']));
        $precio      = validar_campo(trim($_POST['precio']));
        $existencias = validar_campo(trim($_POST['existencias']));
        $descripcion = validar_campo(trim($_POST['descripcion']));
        $nombre_img  =  $_FILES['imagen']['name'];//Contiene el nombre
        $archivo     =  $_FILES['imagen']['tmp_name'];//Contiene el archivo
        $ruta        = "../img/".$nombre_img;
        $activado    = validar_campo(trim($_POST['activado']));

        move_uploaded_file($archivo,$ruta);

        $consulta   = ("INSERT INTO producto (nombre, precio, existencias, descripcion, foto, activado) 
        VALUES ('$nombre','$precio', '$existencias', '$descripcion', '$ruta','$activado')")or die($conexion -> error);
        $resultado  = mysqli_query($conexion,$consulta);

if ($resultado == true) {
    echo "<script>location.href='../view/tabla_productos.php'</script>";
}else{
    echo '<script>alert("¡Producto No Agregado!")</script> ';
    echo "<script>location.href='../view/agregar_productos.php'</script>";
}
}