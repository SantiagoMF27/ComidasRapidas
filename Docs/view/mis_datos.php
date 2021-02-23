<?php 
    include '../controllers/seguridad-user.php';
    include 'partials/head.php';
?>
<title>Mis Datos - <?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"];?></title>
</head>

<body>
<?php include 'partials/menu.php';?>
    <main class="mis_datos">
        <div class="datos-ini">
            <h1>Mis Datos</h1><br><br>
            <ul>
                <li><strong>Tu Nombre: </strong><?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"];?></li><br>
                <li><strong>Tu Usuario: </strong><?php echo $_SESSION["usuario"]; ?></li><br>
                <li><strong>Tu Correo: </strong><?php echo $_SESSION["email"]; ?></li><br>
            </ul>
            <div class="actualizar-datos">
                <h3>Actualizar Datos</h3>
                <a href="" id="abrir-from">
                    <img src="./assets/img/icon/recargar.png" alt="Actulizar" title="Actualizar">
                </a>
            </div>
        </div>
        <div class="actualizar-mis-datos" id="actual-from">
            <div id="cerrar" class="cerrar" title="Cerrar">x</div>
            <form action="../models/actualizarMisDatos.php?id_usuario=<?php echo $_SESSION['id_usuario']?>" method="POST">
            <input type="text" name="nombre" placeholder="Cambiar Nombre" value="<?php echo $_SESSION['nombre']?>" pattern="[A-Z a-z].{2,}" required><br>
            <input type="text" name="apellido" placeholder="Cambiar Apellido" value="<?php echo $_SESSION['apellido']?>" pattern="[A-Z a-z].{2,}" required><br>
            <input type="email" name="email" placeholder="Cambiar Correo" value="<?php echo $_SESSION['email']?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
            <input type="text" name="usuario" placeholder="Cambiar Usuario" value="<?php echo $_SESSION['usuario']?>" pattern="[A-Za-z0-9_-].{5,}" required><br>
            <input type="password" name="contrasena" placeholder="Cambiar Contraseña" value="" pattern="[A-Za-z0-9_-].{5,}" required><br>
            <input type="submit" value="Actualizar" name="cambiar-datos">
            </form>
        </div>
    </main>
<?php include 'partials/footer.php';?>