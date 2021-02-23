<?php
//Borrar registros desde administrador

include_once('../controllers/conexion.php');

//Borrar Usuarios
if (isset($_GET['id_usuario'])) {
    $borrar = ("DELETE FROM usuario WHERE id_usuario = ".$_GET['id_usuario'])or die($conexion -> error);
    $respuesta = mysqli_query($conexion,$borrar);
    
    if ($respuesta) {
        echo "<script>location.href='../view/tabla_usuarios.php'</script>";
    }else {
        echo '<script>alert("¡Usuario No Borrado!")</script> ';
        echo "<script>location.href='../view/admin.php'</script>";
    }
}

//Borrar linea pedido
if (isset($_GET['id_linea'])) {
	$borrar = ("DELETE FROM linea_pedido WHERE id_linea = ".$_GET['id_linea'])or die($conexion -> error);
    $respuesta = mysqli_query($conexion, $borrar);
    if ($respuesta) {
        echo "<script>location.href='../view/tabla_linea_pedidos.php'</script>";
    }else {
        echo '<script>alert("¡Linea No Borrado!")</script>';
        echo "<script>location.href='../view/admin.php'</script>";
    }
}

//Borra pedidos
if (isset($_GET['id_pedido'])) {
    $borrar = ("DELETE FROM pedido WHERE id_pedido = ".$_GET['id_pedido'])or die($conexion -> error);
    $respuesta = mysqli_query($conexion, $borrar);
    if ($respuesta) {
        echo "<script>location.href='../view/tabla_pedidos.php'</script>";
    }else {
        echo '<script>alert("¡Pedido No Borrado!")</script>';
        echo "<script>location.href='../view/admin.php'</script>";
    }
}

//Borra clientes
if (isset($_GET['id_cliente'])) {
    $borrar = ("DELETE FROM cliente WHERE id_cliente = ".$_GET['id_cliente'])or die($conexion -> error);
    $respuesta = mysqli_query($conexion, $borrar);
    if ($respuesta) {
        echo "<script>location.href='../view/tabla_clientes.php'</script>";
    }else {
        echo '<script>alert("¡Cliente No Borrado!")</script>';
        echo "<script>location.href='../view/admin.php'</script>";
    }
}

//Borrar productos
extract($_GET);
$ruta = $_GET['ruta'];
if(@$idborrar == 2){
	$borrar = ("DELETE FROM producto WHERE id_producto = $id_producto");
    $respuesta = mysqli_query($conexion, $borrar);
    if ($respuesta) {
        unlink($ruta);
        echo "<script>location.href='../view/tabla_productos.php'</script>";
    }else {
        echo '<script>alert("¡Producto No Borrado!")</script> ';
        echo "<script>location.href='../view/admin.php'</script>";
    }
}
?>