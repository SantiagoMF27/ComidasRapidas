<?php include 'partials/head.php';?>
<title>Suánfonson - Iniciar Sesion</title>
</head>

<body>
<?php include 'partials/menu.php';?>
    <main class="ingresar">
        <div class="formulario-ingresar" id="formulario-ingresar">
            <form id="loginForm" action="../controllers/ingresar.php" method="POST" role="form">
                <h2>Iniciar Sesion</h2><br>
                    <input type="text"     name="txtUsuario"  class="input" id="usuario"  placeholder="Usuario" pattern="[A-Za-z0-9_-].{5,}" required autofocus>
                    <input type="password" name="txtPassword" class="input" id="password" placeholder="Contraseña" pattern="[A-Za-z0-9_-].{5,}" required>
                    <input type="submit"   value="Ingresar"   class="btn" title="Ingresar" name="ingreso"><br><br>
                    <a class="url" href="registrarse.php">Crear Cuenta</a>
            </form>
        </div>
    </main>
<?php include 'partials/footer.php';?>