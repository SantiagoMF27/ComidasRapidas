<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
		extract($_GET);
		include_once('../controllers/conexion.php');

		$sql = ("SELECT * FROM usuario WHERE id_usuario = $id_usuario");
		$ressql = mysqli_query($conexion,$sql);
		while ($row = mysqli_fetch_row ($ressql)){
            $id_usuario   = $row[0];
            $nombre       = $row[1];
            $apellido     = $row[2];
            $email        = $row[3];
            $usuario      = $row[4];
            $contrasena   = $row[5];
            $id_tipo_user = $row[6];
            }
?>
<title>Actualizar a <?php echo $nombre." ".$apellido ?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="actualizar-user">
        <div class="formulario-actualizar-user">
            <h2>Actualizar Usuario</h2><br>
            <form action="../models/actualizar_registros.php" method="POST">
                <label class="actualizar-label" for="">Id</label><br>
                <input type="number" name="id_usuario" value="<?php echo $id_usuario ?>" readonly="readonly"
                    required><br>
                <label class="actualizar-label" for="">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $nombre ?>" required><br>
                <label class="actualizar-label" for="">Apellido</label><br>
                <input type="text" name="apellido" value="<?php echo $apellido ?>" required><br>
                <label class="actualizar-label" for="">Email</label><br>
                <input type="email" name="email" value="<?php echo $email ?>" required><br>
                <label class="actualizar-label" for="">Usuario</label><br>
                <input type="text" name="usuario" value="<?php echo $usuario ?>" required><br>
                <label class="actualizar-label" for="">Contrasena</label><br>
                <input type="text" name="contrasena" value="" required><br>
                <label class="actualizar-label" for="">Tipo de Usuario</label><br>
                <input type="number" name="id_tipo_user" value="<?php echo $id_tipo_user ?>" required>
                <input type="submit" name="actualizarusuario" value="Actualizar" title="Actualiza el Usuario">
                <a class="url-actual" href="tabla_usuarios.php">Cancelar y Regresar</a>
            </form>
        </div>
    </main>
    <?php include 'partials/footer.php';?>