<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Pedidos - Administrador <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main id="arriba">
        <div class="fondo-pedido">
            <div class="contenedor-tablas">
                <h2>Administrar Pedidos</h2>
                <p title="Tabla Pedido"><strong>Tabla Pedido</strong></p>
                <?php
//Tabla pedidos
    include_once('../controllers/conexion.php');
    $sql = ("SELECT * FROM pedido");
    $query = mysqli_query($conexion, $sql);
    //columnas
    echo "<table class='tablas'>";
        echo "<tr class='columnas'>";
            echo "<th title='Id de Pedido'>Id</th>";
            echo "<th title='Total Pedido'>Total</th>";
            echo "<th title='Fecha de Pedido'>Fecha</th>";
            echo "<th title='Id del Cliente'>Id Cliente</th>";
            echo "<th title='Borrar'>Borrar</th>";
        echo "</tr>";
    ?>
                <?php 
    //Fila
        while($arreglo = mysqli_fetch_array($query)){?>
                <tr class='filas'>
                    <td><?php echo $arreglo[0]?></td>
                    <td><?php echo $arreglo[1]?></td>
                    <td><?php echo $arreglo[2]?></td>
                    <td><?php echo $arreglo[3]?></td>
                    <td class="icono-conten">
                        <a href="../models/borrar_registros.php?id_pedido=<?php echo $arreglo[0]?>"
                            onclick="return confirmBorrar();">
                            <img src="assets/img/icon/borrar.png" class="icon" title="Borrar Pedido">
                        </a></td>
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
                    <a href="tabla_linea_pedidos.php" title="Ir al la Tabla Linea Pedidos" class="menu-item">
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