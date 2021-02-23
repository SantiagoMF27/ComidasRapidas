<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Tabla Productos - Administrador <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main id="arriba">
        <div class="fondo-prod">
            <div class="contenedor-tablas">
                <h2>Administrar Productos</h2>
                <p title="Tabla de Productos"><strong>Tabla Productos</strong></p>
                <?php 
    //Tabla productos
    include_once('../controllers/conexion.php');
    $sql = ("SELECT * FROM producto");
    $query = mysqli_query($conexion, $sql);
    //columnas
    echo "<table class='tablas'>";
        echo "<tr class='columnas'>";
            echo "<th title='Id de Producto'>Id</th>";
            echo "<th title='Nombre de Producto'>Nombre</th>";
            echo "<th title='Precio de Producto'>Precio</th>";
            echo "<th title='Cantidad de Producto'>Existencias</th>";
            echo "<th title='Descripción de Productos'>Descripción</th>";
            echo "<th title='Imagen de Productos'>Imagen</th>";
            echo "<th title='Producto Activado'>Activado</th>";
            echo "<th title='Editar'>Editar</th>";
            echo "<th title='Editar'>Borrar</th>";
        echo "</tr>";
    ?>
                <?php 
    //Fila
        while($arreglo = mysqli_fetch_array($query)){?>
                <tr class="filas">
                    <td><?php echo $arreglo[0]?></td>
                    <td><?php echo $arreglo[1]?></td>
                    <td><?php echo $arreglo[2]?></td>
                    <td><?php echo $arreglo[3]?></td>
                    <td><?php echo $arreglo[4]?></td>
                    <td class="td-imagen">
                        <img src="<?php echo $arreglo[5];?>" class="img-carrito-tabla-imge ver-img-carrito-js"
                            alt="<?php echo $arreglo[1]?>">
                    </td>
                    <td><?php echo $arreglo[6]?></td>
                    <td class="icono-conten">
                        <a href="actualizar_productos.php?id_producto=<?php echo $arreglo[0]?>">
                            <img src="assets/img/icon/editar.png" class="icon" title="Editar Producto">
                        </a></td>
                    <td class="icono-conten">
                        <a href="../models/borrar_registros.php?id_producto=<?php echo $arreglo[0]?>&idborrar=2&ruta=<?php echo $arreglo[5];?>"
                            onclick="return confirmBorrar();">
                            <img src="assets/img/icon/borrar.png" class="icon" title="Borrar Producto">
                        </a></td>
                </tr>
                </tr>
                <?php }?>
                </table>
                <br>
                <br>
                <!--Boton de flotante -->
                <div class="boton-mas">
                    <span class="menu-item" id="menu" title="Opciones">
                        <img src="assets/img/icon/plus.svg" class="icon-agregar">
                    </span>
                    <a href="#arriba" title="Ir Arriba" class="menu-item">
                        <img src="assets/img/icon/flecha.png" class="icon-agregar flecha-arriba" id="icon-agregar">
                    </a>
                    <a href="agregar_productos.php" title="Agregar Producto" class="menu-item">
                        <img src="assets/img/icon/agregar_producto.png" class="icon-agregar" id="icon-agregar">
                    </a>
                    <a href="#abajo" title="Ir Abajo" class="menu-item">
                        <img src="assets/img/icon/flecha.png" class="icon-agregar flecha-abajo" id="icon-agregar">
                    </a>
                </div>
                <!--Animacion de Imagen-->
                <div class="imagen-light">
                    <img src="assets/img/icon/cerrar_menu.png" alt="Cerrar" title="Cerrar" class="close">
                    <img src="" alt="<?php echo $arreglo[1]?>" class="agregar-imagen">
                </div>
            </div>
        </div>
        <div id="abajo"></div>
    </main>
    <?php include 'partials/footer.php';?>