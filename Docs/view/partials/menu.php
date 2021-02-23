<!--Menú de todas las vistas-->
<header>
    <!--Condición para la Redireccion en el menú de inicio-->
    <?php if (!isset($_SESSION["email"])) {?> 
        <a href="index.php" class="logo" title="Comidas Suánfonson S.A.S.">
        <img src="assets/img/icon/favicon.png" alt="Logo">
            <!--Condición para la Redireccion en el menú de inicio Usuario-->
            <?php }else if($_SESSION["id_tipo_user"] == 2) {?>
            <a href="inicio_usuario.php" class="logo" title="Bienvenido a Comidas Suánfonson">
            <img src="assets/img/icon/favicon.png" alt="Logo">
                <!--Condición para la Redireccion en el menú de inicio Administragor-->
                <?php }else if($_SESSION["id_tipo_user"] == 1) {?>
                <a href="admin.php" class="logo" title="Comidas Suánfonson Administrdor">
                <img src="assets/img/icon/favicon.png" alt="Logo"> 
                    <?php }?>
        <h4>
            <!--Condición para el nombre en el menú de inicio-->
            <?php if (!isset($_SESSION["email"])) {?> 
                Suánfonson
                <!--Condición para el nombre en el menú de inicio Usuario-->
                <?php }else if($_SESSION["id_tipo_user"] == 2) {?>
                    Suánfonson
                    <!--Condición para el nombre en el menú de inicio Administtrador-->
                    <?php }else if($_SESSION["id_tipo_user"] == 1) {?>
                        Administrador 
                        <?php }?>
        </h4> 
            </a>
            <div class="toggle" onclick="toggleMuenu();" title="Menú"></div>
            <ul class="menu">
                <!--Condición para el menú de inicio-->
                <?php if (!isset($_SESSION["email"])) {?>
                    <li><a href="index.php" title="Página de Inicio">Inicio</a></li>
                    <li><a href="ingresar.php" title="Iniciar Sesion">Ingresar</a></li>
                    <li><a href="registrarse.php" title="Crear una Cuenta">Registrarse</a></li>
                    <li><a href="informacion.php" title="Sobre Nosotros">Quienes Somos</a></li>
                    <li><a href="contacto.php" title="Contactanos">Contactanos</a></li>
                    <!--Condición para el menú de tipo usuario-->
                    <?php }else if($_SESSION["id_tipo_user"] == 2) {?>
                        <li><a href="inicio_usuario.php" title="Página de Inicio">Inicio</a></li>
                        <li><a href="carrito.php" title="Mi Carrito">Carrito
                            <!--Notificacion productos agregados al carrito-->
                                <?php 
                                    if (isset($_SESSION['carrito'])) {
                                        echo "<span class='productos-agregados-carrito' title='Productos Agregados'>";
                                            echo count($_SESSION['carrito']);
                                        echo "</span>";
                                    }
                                ?>
                        </a></li>
                        <li><a href="mis_datos.php" title="Mis Datos">Mis Datos</a></li>
                        <li><a href="contacto.php" title="Contactanos">Contactanos</a></li>
                        <li><a onclick="return confirmCerrar();" href="../controllers/cerrar_sesion.php" title="Cierra la Sesion">Salir</a></li>
                        <!--Condición para el menú de tipo administrador-->
                        <?php }else if ($_SESSION["id_tipo_user"] == 1) {?>
                            <li><a href="admin.php" title="Página de Inicio">Inicio</a></li>
                            <li><a href="tabla_clientes.php" title="Tabla Clientess">Clientes</a></li>
                            <li><a href="tabla_pedidos.php" title="Tabla Pedidos">Pedidos</a></li>
                            <li><a href="tabla_linea_pedidos.php" title="Tabla Linea Pedidos">Linea</a></li>
                            <li><a href="tabla_usuarios.php" title="Tabla Usuarios">Usuarios</a></li>
                            <li><a href="tabla_productos.php" title="Tabla Productos">Productos</a></li>
                            <li><a onclick="return confirmCerrar();" href="../controllers/cerrar_sesion.php" title="Cierra la Sesion">Salir</a></li>
                            <?php }?>
            </ul>
</header>