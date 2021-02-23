<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Pedidos Administrado <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
<main id="arriba">
    <div class="fondo-pedido">
        <div class="contenedor-tablas">
            <h2>Administrar Linea Pedido</h2>
                <p title="Tabla Pedido"><strong>Tabla Linea Pedido</strong></p>
<?php 
//Tabla linea pedido
    include_once('../controllers/conexion.php');
    $sql = ("SELECT * FROM linea_pedido");
    $query = mysqli_query($conexion, $sql);
    //columnas
    echo "<table class='tablas'>";
        echo "<tr class='columnas'>";
            echo "<th title='Id de Linea Pedido'>Id</th>";
            echo "<th title='Cantidad de Produto'>Cantidad</th>";
            echo "<th title='Precio de Produto'>Precio</th>";
            echo "<th title='Subtotal de Produto'>Subtotal</th>";
            echo "<th title='Id del Pedido'>Id Pedido</th>";
            echo "<th title='Id del Producto'>Id Producto</th>";
            echo "<th title='Borrar'>Borrar</th>";
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
                <td><?php echo $arreglo[5]?></td>
                <td class="icono-conten">
                <a href="../models/borrar_registros.php?id_linea=<?php echo $arreglo[0]?>" onclick="return confirmBorrar();">
                    <img src="assets/img/icon/borrar.png" class="icon" title="Borrar Pedido">
                </a></td>		
            </tr>				
            </tr>
        <?php }?>
        </table>
        <br>
        <br>
<!--Boton de Agregar-->
    <div class="boton-mas">
        <span class="menu-item" id="menu" title="Opciones">
            <img src="assets/img/icon/plus.svg" class="icon-agregar">
        </span>
            <a href="#arriba" title="Ir Arriba" class="menu-item">
                <img src="assets/img/icon/flecha.png" class="icon-agregar flecha-arriba" id="icon-agregar">
            </a>
            <a href="tabla_productos.php" title="Ir al la Tabla Productos" class="menu-item">
                <img src="assets/img/icon/tabla.png" class="icon-agregar" id="icon-agregar">
            </a>
            <a href="#abajo" title="Ir Abajo" class="menu-item">
                <img src="assets/img/icon/flecha.png" class="icon-agregar flecha-abajo" id="icon-agregar">
            </a>
    </div>
        </div>
    </div>
    <div id="abajo"></div>
</main>
<?php include 'partials/footer.php';?>