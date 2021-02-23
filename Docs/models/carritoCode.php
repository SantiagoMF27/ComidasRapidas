<?php 
//Para agregar al carrito

include_once('../controllers/conexion.php');

if (isset($_SESSION['carrito'])) {
    //Si exixte buscamos si ya estaba agregado este producto
    if (isset($_GET['id'])) {
        $arreglo = $_SESSION['carrito'];
        $encontro = false;
        $numero = 0;
        for ($i=0; $i < count($arreglo); $i++) { 
            if ($arreglo[$i]['Id'] == $_GET['id']) {
                $encontro = true;
                $numero = $i;
            }
        }
        if ($encontro == true) {
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad'] + 1;
            $_SESSION['carrito'] = $arreglo;
            header("location: carrito.php");
        }else{
            //Si no estaba el registro 
                $nombre = "";
                $precio = "";
                $imagen = "";
                $res = $conexion->query("SELECT * FROM producto WHERE id_producto =".$_GET['id'])or die($conexion -> error);
                $fila = mysqli_fetch_row($res);
                $nombre = $fila['1'];
                $precio = $fila['2'];
                $imagen = $fila['5'];
                $arregloNuevo = array(
                    'Id'       => $_GET['id'],
                    'Nombre'   => $nombre,
                    'Precio'   => $precio,
                    'Imagen'   => $imagen,
                    'Cantidad' => 1
                );
                array_push($arreglo, $arregloNuevo);
                $_SESSION['carrito'] = $arreglo;
                header("location: carrito.php");
            }
        }
}else{
    //Creamos la Variable de sesion
    if (isset($_GET['id'])) {
        $nombre = "";
        $precio = "";
        $imagen = "";
        $res = $conexion->query("SELECT * FROM producto WHERE id_producto =".$_GET['id'])or die($conexion -> error);
        $fila = mysqli_fetch_row($res);
        $nombre = $fila['1'];
        $precio = $fila['2'];
        $imagen = $fila['5'];
        $arreglo[] = array(
            'Id'       => $_GET['id'],
            'Nombre'   => $nombre,
            'Precio'   => $precio,
            'Imagen'   => $imagen,
            'Cantidad' => 1
        );
        $_SESSION['carrito']=$arreglo;
        header("location: carrito.php");
    }
}
?>