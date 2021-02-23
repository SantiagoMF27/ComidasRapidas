<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Clientes - Administrador <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main id="arriba">
        <div class="fondo-cliente">
            <div class="contenedor-tablas">
                <h2>Administrar Clientes</h2>
                <p title="Tabla Cliente"><strong>Tabla Cliente</strong></p>
                <?php
//Tabla cliente
    include_once('../controllers/conexion.php');
    $sql = ("SELECT * FROM cliente");

    $query = mysqli_query($conexion, $sql);
    //columnas
    echo "<table class='tablas'>";
        echo "<tr class='columnas'>";
            echo "<th title='Id del Cliente'>Id</th>";
            echo "<th title='Nombre del Cliente'>Nombre</th>";
            echo "<th title='Apellido del Cliente'>Apellido</th>";
            echo "<th title='Celular del Cliente'>Celular</th>";
            echo "<th title='Ciudad del Cliente'>Ciudad</th>";
            echo "<th title='Direccion del Cliente'>Direccion</th>";
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
                        <a href="../models/borrar_registros.php?id_cliente=<?php echo $arreglo[0]?>"
                            onclick="return confirmBorrar();">
                            <img src="assets/img/icon/borrar.png" class="icon" title="Borrar Cliente">
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
                    <a href="tabla_pedidos.php" title="Ir al la Tabla Pedidos" class="menu-item">
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