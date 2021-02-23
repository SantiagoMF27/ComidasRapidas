<?php 
//Conexion a la Base de Datos

$host       = 'localhost';
$usuario    = 'root';
$contrasena = '';
$db         = 'suanfonson';

$conexion = @mysqli_connect($host, $usuario, $contrasena, $db);
mysqli_set_charset($conexion,"utf8");
if ($conexion -> connect_error) {
    die("No sepudo Conectar");
}
?>
