<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Agregar Producto - Administrador <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
<?php include 'partials/menu.php';?>
    <main class="agregar-producto">
        <div class="formulario-usuario">
            <form action="../models/agregar_registros.php" method="POST" class="registrase-form" enctype="multipart/form-data">
                <h2>Agregar Producto</h2><br>
                <input type="text"   name="nombre"  placeholder="Ingrese el nombre" required autofocus>
                <input type="number" name="precio" placeholder="Ingrese el precio" required>
                <input type="number" name="existencias" placeholder="Ingresa la existencia" required>
                <input type="text"   name="descripcion" placeholder="Ingresa la descripcion" required>
                <input type="file" id="file-id" name="imagen" accept="image/*" required>
                <input type="text"   name="activado" placeholder="Ingrese la activacion" required>
                <input type="submit" name="agregarproducto"   value="Agregar" class="btn" title="Agregar Producto"><br><br> 
                <a class="url" href="tabla_productos.php">Cancelar y Regresar</a>
            </form>
        </div>
    </main>
<?php include 'partials/footer.php';?>