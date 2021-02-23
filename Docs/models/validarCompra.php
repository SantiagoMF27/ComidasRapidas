<?php 
//Validamos la compra del cliente 

//Verificamos si existe la session carrito
if (!isset($_SESSION['carrito'])) {
    header("location: inicio_usuario.php");
}

    $arreglo = $_SESSION['carrito'];
    $total = 0;
    for ($i=0; $i < count($arreglo); $i++) { 
        $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
    }

    //Insertamos los datos del cliente
    if (isset($_POST['comprar'])) {
        $nombre    = $_POST['nombre_cli'];
        $apellido  = $_POST['apellido_cli'];
        $celular   = $_POST['celular_cli'];
        $ciudad    = $_POST['ciudad_cli'];
        $direccion = $_POST['direccion_cli'];
        $conexion -> query("INSERT INTO cliente (nombre, apellido, celular, ciudad, direccion) 
    VALUES ('$nombre','$apellido','$celular','$ciudad','$direccion')")or die($conexion -> error);
    $id_cliente = $conexion -> insert_id;
        }

    //Insertamos los datos del pedido
    $fecha = date("y/m/d");
    $conexion -> query("INSERT INTO pedido (total, fecha, id_cliente) 
    VALUES ('$total','$fecha','$id_cliente')")or die($conexion -> error);
    $id_pedido = $conexion -> insert_id;

    //Insertamos los datos de la linea pedido
    for ($i=0; $i < count($arreglo); $i++) {
        $conexion -> query("INSERT INTO linea_pedido (cantidad, precio, subtotal, id_pedido, id_producto) 
        VALUES (
            ".$arreglo[$i]['Cantidad'].",
            ".$arreglo[$i]['Precio'].",
            '$total',
            '$id_pedido',
            ".$arreglo[$i]['Id']."
            )")or die($conexion -> error);
    }

//Destruimos la session carrito
unset($_SESSION['carrito']);
?>

