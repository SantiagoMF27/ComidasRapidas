<?php
//Le damos las gracias al cliente por la compra

    include '../controllers/seguridad-user.php';
    include '../controllers/conexion.php';
    include '../models/validarCompra.php';
    include 'partials/head.php';
?>
<title>Gracias <?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="gracias">
        <div class="gracias-contenedor">
            <h1>¡Gracias por tu Compra!</h1>
            <h2><?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"];?></h2>
            <img src="assets/img/icon/gracias.png" alt="Gracias"><br>
            <p>Su pedido se ha completado correctamente.</p>
            <h3><a href="inicio_usuario.php">Volver a la tienda</a></h3>
        </div>
    </main>
    <?php include 'partials/footer.php';?>