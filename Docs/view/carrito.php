<?php 
    include '../controllers/seguridad-user.php';
    include 'partials/head.php';
    include '../models/carritoCode.php';
?>
<title>Carrito - <?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="contenido-carrito">
        <div class="carrito-contenedor">
            <?php if (isset($_SESSION['carrito'])) { ?>
            <h2>Mi Carrito</h2>
            <table class="tabla-carrito">
                <thead>
                    <tr class="columna-carrito">
                        <th title="Imagen de Producto">Imagen</th>
                        <th title="Nombre de Producto">Producto</th>
                        <th title="Precio de Producto">Precio</th>
                        <th title="Cantidad de Prducto">Cantidad</th>
                        <th title="Total">Total</th>
                        <th title="Quitar Producto">Quitar</th>
                    </tr>
                </thead>
                <?php }?>
                <tbody>
                    <?php 
                $total = 0;
                //Carrito Lleno
                if (isset($_SESSION['carrito'])) {
                    $arregloCarrito = $_SESSION['carrito'];
                    for ($i=0; $i < count($arregloCarrito); $i++) { 
                        $total = $total + ($arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad']);
                ?>
                    <tr class="fila-carrito">
                        <td>
                            <img src="<?php echo $arregloCarrito[$i]['Imagen']?>"
                                alt="<?php echo $arregloCarrito[$i]['Nombre']?>" class="img-carrito ver-img-carrito-js"
                                title="Ver Imagen">
                        </td>
                        <td title="Nombre"><?php echo $arregloCarrito[$i]['Nombre']?></td>
                        <td title="Precio">$ <?php echo $arregloCarrito[$i]['Precio']?></td>
                        <td title="Cantidad">
                            <div class="input-canntidad">
                                <input type="text" class="form-cantidad elegir-cantidad"
                                    data-precio="<?php echo $arregloCarrito[$i]['Precio']?>"
                                    data-id="<?php echo $arregloCarrito[$i]['Id']?>"
                                    value="<?php echo $arregloCarrito[$i]['Cantidad']?>" min="1" max="20"
                                    id="cantidad-carrito" required aria-label="Example text with button addon"
                                    aria-describedby="button-addon1" pattern="[0-9]{1,2}">
                            </div>
                        </td>
                        <td class="cant<?php echo $arregloCarrito[$i]['Id']?>" title="Total">$
                            <?php echo $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad']?></td>
                        <td>
                            <a href="#" class="btn-eliminar" data-id="<?php echo $arregloCarrito[$i]['Id']?>">
                                <img src="assets/img/icon/borrar.png" class="icon-quitar" title="Quitar del Carrito">
                            </a>
                        </td>
                    </tr>
                    <?php 
                }
            }
            //Carrito Vacio
            else if (!isset($_SESSION['carrito'])) { ?>
                    <div class="carrito-vacio">
                        <h2>¡Carrito Vacío!</h2>
                        <div class="carrito-vacio-imagen">
                            <a href="inicio_usuario.php" title="Agregar Productos al Carrito">
                                <img src="assets/img/icon/carrito_vacio.png" alt="Carrito">
                            </a>
                        </div>
                    </div>
                    <?php }?>
                </tbody>
            </table>
            <!--Subtotal-->
            <?php if (isset($_SESSION['carrito'])) { ?>
            <div class="contenedor-subtotal">
                <ul>
                    <li><a href="inicio_usuario.php">Seguir Comprando</a></li>
                    <li><a href="../models/vaciarCarrito.php">Vaciar Carrito</a></li>
                    <li"><strong>SubTotal: </strong>$ <?php echo $total;?></li>
                </ul>
            </div>
            <?php }?>
        </div>
        <!--Boton de flotante-->
        <?php if (isset($_SESSION['carrito'])) { ?>
        <div class="boton-mas">
            <a href="comprobacion.php">
                <span class="menu-item" title="Comprar Ahora">
                    <img src="assets/img/icon/comprar.png" class="icon-agregar comprar-icono-carrito">
                </span>
            </a>
        </div>
        <!--Animacion de Imagen-->
        <div class="imagen-light">
            <img src="assets/img/icon/cerrar_menu.png" alt="Cerrar" title="Cerrar" class="close">
            <img src="" alt="<?php echo $arregloCarrito[$i]['Nombre']?>"
                title="" class="agregar-imagen">
        </div>
        <?php }?>
    </main>
    <?php include 'partials/footer.php';?>