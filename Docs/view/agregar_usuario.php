<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Agregar Usuario - Administrador <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
<?php include 'partials/menu.php';?>
    <main class="agregar-usuario">
        <div class="formulario-usuario">
            <form action="../models/agregar_registros.php" method="POST" class="registrase-form">
                <h2>Agregar Usuario</h2><br>
                <input type="text"     name="nombre"       placeholder="Ingrese el nombre" required autofocus>
                <input type="text"     name="apellido"     placeholder="Ingrese el apellido" required>
                <input type="email"    name="email"        placeholder="Ingresa el correo" required>
                <input type="text"     name="usuario"      placeholder="Ingresa el usuario" required>
                <input type="password" name="contrasena"   placeholder="Ingrese la contraseña" required>
                <input type="number"   name="id_tipo_user" placeholder="Ingrese el tipo de usuario" min="1" max="2" required>
                <input type="submit"   name="agregarusuarios"   value="Agregar" class="btn" title="Agregar Usuario"><br><br> 
                <a class="url" href="tabla_usuarios.php">Cancelar y Regresar</a>
            </form>
        </div>
</main>
<?php include 'partials/footer.php';?>