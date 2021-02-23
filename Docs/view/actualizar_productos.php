<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
        extract($_GET);
        include_once('../controllers/conexion.php');

        $sql = ("SELECT * FROM producto WHERE id_producto = $id_producto");
        $ressql = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_row ($ressql)){
            $id_producto = $row[0];
            $nombre      = $row[1];
            $precio      = $row[2];
            $existencias = $row[3];
            $descripcion = $row[4];
            $imagen      = $row[5];
            $activado    = $row[6];
            }
?>
<title>Actualizar - <?php echo $nombre ?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="actualizar-productos">
        <div class="formulario-actualizar-pro">
            <h2>Actualizar Producto</h2><br>
            <form action="../models/actualizar_registros.php" method="POST" enctype="multipart/form-data">
                <label class="actualizar-label" for="">Id</label><br>
                <input type="number" name="id_producto" value="<?php echo $id_producto ?>" readonly="readonly" required>
                <label class="actualizar-label" for="">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre ?>" required>
                <label class="actualizar-label" for="">Precio</label><br>
                <input type="number" name="precio" value="<?php echo $precio ?>" required>
                <label class="actualizar-label" for="">Existencias</label><br>
                <input type="number" name="existencias" value="<?php echo $existencias ?>" required>
                <label class="actualizar-label" for="">Descripción</label><br>
                <input type="text" name="descripcion" value="<?php echo $descripcion ?>" required>
                <label class="actualizar-label" for="">Cambiar Imagen</label>
                <div class="conten-ver-imagen">
                    <img class="ver-editar-imagen ver-img-carrito-js" src="<?php echo $imagen ?>"
                        alt="<?php echo $titulo ?>" title="Ver Imagen"><br>
                </div>
                <input type="file" name="imagen" value="<?php echo $nombre ?>" required>
                <label class="actualizar-label" for="">Activado</label><br>
                <input type="text" name="activado" value="<?php echo $activado ?>" required>
                <input type="submit" name="actualizarproducto" value="Actualizar" title="Actualiza el Producto"><br>
                <a class="url-actual" href="tabla_productos.php">Cancelar y Regresar</a>
            </form>
        </div>
        <!--Animacion de Imagen-->
        <div class="imagen-light">
            <img src="assets/img/icon/cerrar_menu.png" alt="Cerrar" title="Cerrar" class="close">
            <img src="" alt="<?php echo $arreglo[1]?>" class="agregar-imagen">
        </div>
    </main>
    <?php include 'partials/footer.php';?>