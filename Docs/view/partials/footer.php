<!--Footer de todas las vistas-->
<footer class="footer-contenido">
    <!--Condición para el footer de inicio-->
    <?php if(!isset($_SESSION["email"])) {?> 
        <div class="contenedor-pagina">
            <div class="contenedor-footer">
                <h4>Telefono</h4>
                <p>+57 316 456 2354 Medellin</p>
            </div>
            <div class="contenedor-footer">
                <h4>Email</h4>
                <p>suanfonson@comidas.com</p>
            </div>
            <div class="contenedor-footer">
                <h4>Direccion</h4>
                <p>CL 32 N#4 CR 67 N#5 Medellin</p>
            </div>
        </div>
        <!--Condición para el footer de inicio de Usuario-->
        <?php }else if($_SESSION["id_tipo_user"] == 2) {?>
            <div class="contenedor-pagina">
            <div class="contenedor-footer">
                <h4>Telefono</h4>
                <p>+57 316 456 2354 Medellin</p>
            </div>
            <div class="contenedor-footer">
                <h4>Email</h4>
                <p>suanfonson@comidas.com</p>
            </div>
            <div class="contenedor-footer">
                <h4>Direccion</h4>
                <p>CL 32 N#4 CR 67 N#5 Medellin</p>
            </div>
            </div>
            <!--Condición para el footer de inicio Administrador-->
            <?php } else if($_SESSION["id_tipo_user"] == 1) {?>
                <div class="contenedor-pagina">
                <div class="contenedor-footer">
                    <h4>Tabla Clientes</h4>
                    <a href="tabla_clientes.php"><p title="Administrar Clientes">Administrar</p></a>
                </div>
                <div class="contenedor-footer">
                    <h4>Tabla Pedidos</h4>
                    <a href="tabla_pedidos.php"><p title="Administrar Pedidos">Administrar</p></a>
                </div>
                <div class="contenedor-footer">
                    <h4>Tabla Linea Pedidos</h4>
                    <a href="tabla_linea_pedidos.php"><p title="Administrar Linea Peidos">Administrar</p></a>
                </div>
                <div class="contenedor-footer">
                    <h4>Tabla Usuarios</h4>
                    <a href="tabla_usuarios.php"><p title="Administrar Usuarios">Administrar</p></a>
                </div>
                <div class="contenedor-footer">
                    <h4>Tabla Productos</h4>
                    <a href="tabla_productos.php"><p title="Administrar Productos">Administrar</p></a>
                </div>
                </div>
                <?php } ?>
        <h2 class="coyrigth-footer">
            &copy; Comidas Suanfonson | 
            <!--Condición para el copy de inicio-->
            <?php if(!isset($_SESSION["email"])) {?> 
                Todos Los Derechos Reservados
                <!--Condición para el copy de inicio de Usuario-->
                <?php }else if($_SESSION["id_tipo_user"] == 2) {?>
                    Política de Privacidad
                    <!--Condición para el copy de inicio Admistrador-->
                    <?php }else if($_SESSION["id_tipo_user"] == 1) {?> 
                        Administrador | <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"];?>
                        <?php }?>
             </h2>
    </footer>
    <script type="text/javascript" language="javascript" src="assets/js/alertas.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/sticky.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/boton.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/imagen.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/borrar-carrito.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/cantidad-carrito.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/formulario.js"></script>
</body>
</html>

<!--Proyecto-Final-SENA-2020-->
<!--Sitio Web de Comidas Rapidas Suanfonson-->
<!--Santiago Manosalva Fernandez-->
<!--Johann Alvarez Escobar-->
<!--John Bayro Graciano Usuga-->
<!--Copyright © Todos los derechos reservados-->