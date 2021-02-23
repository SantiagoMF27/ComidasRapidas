<?php
//Para ver los detalles del produdcto

include_once('../controllers/conexion.php');

  if (isset($_GET['id'])) {
    $resultado = $conexion ->query("SELECT * FROM producto WHERE id_producto =".$_GET['id'])or die($conexion -> error);
    if (mysqli_num_rows($resultado) > 0) {
      $fila = mysqli_fetch_row($resultado);
    }else {
      header("location: ../view/inicio_usuario.php");
    }
  }else {
    header("location: ../view/index.php");
    session_destroy();
} ?>