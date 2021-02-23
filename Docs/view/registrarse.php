<?php include 'partials/head.php';?>
<title>Suánfonson - Registrarse</title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="registrarse">
        <div class="formulario-registro">
            <form action="../controllers/registrarse.php" method="POST" class="registrase-form">
                <h2>Registrarse</h2><br>
                <input type="text" name="txtNombre" id="nombre" placeholder="Ingrese su nombre" pattern="[A-Z a-z].{2,}"
                    required autofocus>
                <input type="text" name="txtApellido" id="apellido" placeholder="Ingrese su apellido"
                    pattern="[A-Z a-z].{2,}" required>
                <input type="email" name="txtEmail" id="email" placeholder="Ingresa su correo"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <input type="text" name="txtUsuario" id="usuario" placeholder="Ingresa su usuario"
                    pattern="[A-Za-z0-9_-].{5,}" required>
                <input type="password" name="txtPassword" id="password" placeholder="Ingrese su contraseña"
                    pattern="[A-Za-z0-9_-].{5,}" required>
                <input type="submit" name="registrar" value="Registrate" class="btn-reg" title="Registarse"><br><br>
                <a href="ingresar.php" class="url">¿Ya tienes una cuenta?</a>
            </form>
        </div>
    </main>
    <?php include 'partials/footer.php';?>