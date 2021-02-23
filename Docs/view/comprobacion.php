<?php 
    include '../controllers/seguridad-user.php';
    include 'partials/head.php';
    if (!isset($_SESSION['carrito'])) {
        header("location: inicio_usuario.php");
    }
    $arreglo = $_SESSION['carrito'];
?>
<title>Detalles Facturacion - <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="contenedor-comprobacion-compra">
        <div class="comprobacion-contenedor">
            <div class="site-wrap">
                <!--Formulario cliente-->
                <form action="gracias.php" method="POST">
                    <div class="site-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <h2 class="h3 mb-3 text-black">Detalles de Facturación</h2>
                                    <div class="p-3 p-lg-5 border">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="c_fname" class="text-black">Nombre <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_fname" name="nombre_cli"
                                                    placeholder="Su Nombre" required autofocus>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="c_lname" class="text-black">Apellido <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_lname" name="apellido_cli"
                                                    placeholder="Su Apellido" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="c_phone" class="text-black">Celular <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_phone" name="celular_cli"
                                                    placeholder="Numero del Móvil" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="c_phone" class="text-black">Ciudad <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_phone" name="ciudad_cli"
                                                    placeholder="Ciudad" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="c_address" class="text-black">Dirección <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_address"
                                                    name="direccion_cli" placeholder="Dirección de la calle" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Productos agregados para comprar-->
                                <div class="col-md-6">
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <h2 class="h3 mb-3 text-black">Tu Orden</h2>
                                            <div class="p-3 p-lg-5 border">
                                                <table
                                                    class="table site-block-order-table mb-5 tabla-total-comprobacion">
                                                    <thead>
                                                        <th title="Productos Pedidos">Productos</th>
                                                        <th title="Cantidad de Productos">Cantidad</th>
                                                        <th title="Precios del Producto">Total</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                    $total = 0;
                                                    $total_cantidad = 0;
                                                    for ($i=0; $i < count($arreglo); $i++) { 
                                                        $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
                                                        $total_cantidad = $total_cantidad + ($arreglo[$i]['Cantidad']);
                                                ?>
                                                        <tr>
                                                            <td title="Nombre del Producto">
                                                                <?php echo $arreglo[$i]['Nombre'] ?></td>
                                                            <td title="Cantidad del Producto">
                                                                <?php echo $arreglo[$i]['Cantidad']?></td>
                                                            <td title="Precio del Producto">$
                                                                <?php echo $arreglo[$i]['Precio'];?></td>
                                                        </tr>
                                                        <?php }?>
                                                        <tr>
                                                            <td title="SubTotal">Total Del Pedido</td>
                                                            <td title="Cantidad de Todo el Pedido">
                                                                <?php echo $total_cantidad;?></td>
                                                            <td title="SubTotal de Todos los Productos">$
                                                                <?php echo $total;?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="form-group">
                                                    <button class="btn btn-realizar-pedido btn-lg py-3 btn-block"
                                                        type="submit" name="comprar" title="Comprar Ahora">Realizar
                                                        Pedido</button>
                                                </div>
                                                <div class="border p-3 mb-3">
                                                    <h3 class="h6 mb-0"><a class="d-block cacelar-pedido-comprobacion"
                                                            href="carrito.php">Regresar al Carrito</a></h3>
                                                </div>
                                                <div class="border p-3 mb-3">
                                                    <h3 class="h6 mb-0"><a class="d-block cacelar-pedido-comprobacion"
                                                            href="inicio_usuario.php">Seguir Comprando</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include 'partials/footer.php';?>