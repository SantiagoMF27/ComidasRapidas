<?php 
  include '../controllers/seguridad-user.php';
  include 'partials/head.php';
  include '../models/detallesProductoCode.php';
?>
<title>Detalles - <?php echo $fila[1];?></title>
</head>

<body>
  <?php include 'partials/menu.php';?>
  <main class="detalles-productos">
    <div class="detalles-contenedor">
      <div class="producto-md">
        <img src="<?php echo $fila[5];?>" alt="<?php echo $fila[1];?>" class="img-producto ver-img-carrito-js"
          title="Ver Imagen">
      </div>
      <div class="producto-md">
        <h2 class="text-black" title="Nombre"><?php echo $fila[1];?></h2>
        <p title="Descripcion"><?php echo $fila[4];?></p>
        <p><strong class="text-primary h4">Precio: $ <?php echo $fila[2];?></strong></p>
        <p><strong class="text-warning h4">Hay <?php echo $fila[3];?></strong></p>
        <p><a href="carrito.php?id=<?php echo $fila[0];?>" class="buy-now btn btn-sm btn-success"
            title="Agregar al Carrito">Agregar al Carrito</a></p>
        <p><a href="inicio_usuario.php" class="buy-now btn btn-sm btn-primary" title="Ver Mas Productos">Regresar al
            Inicio</a></p>
      </div>
    </div>
    <!--Animacion de Imagen-->
    <div class="imagen-light">
      <img src="assets/img/icon/cerrar_menu.png" alt="Cerrar" title="Cerrar" class="close">
      <img src="" alt="<?php echo $arregloCarrito[$i]['Nombre']?>" title="<?php echo $fila[1]?>"
        class="agregar-imagen">
    </div>
  </main>
  <?php include 'partials/footer.php';?>