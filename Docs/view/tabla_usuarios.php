<?php 
    include '../controllers/seguridad-admin.php';
    include 'partials/head.php';
?>
<title>Tabla Usuarios - Administrador <?php echo $_SESSION["nombre"];?></title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main id="arriba">
        <div class="fondo-user">
            <div class="contenedor-tablas">
                <h2>Administrar Usuarios</h2>
                <p title="Tabla de Usuarios"><strong>Tabla Usuarios</strong></p>
                <?php
    //Tabla usuarios
    include_once('../controllers/conexion.php');
    $sql = ("SELECT * FROM usuario");
    $query = mysqli_query($conexion,$sql);
    //columnas
    echo "<table class='tablas'>";
        echo "<tr class='columnas'>";
            echo "<th title='Id de Usuario'>Id</th>";
            echo "<th title='Nombre de Usuario'>Nombre</th>";
            echo "<th title='Apellido de Usuario'>Apellido</th>";
            echo "<th title='Email de Usuario'>Email</th>";
            echo "<th title='Usuario'>Usaurio</th>";
            //echo "<th title='Contraseña de Usuario'>Contraseña</th>";
            echo "<th title='Tipo de Usuario'>Tipo</td>";
            echo "<th title='Fecha de Registro'>Fecha</th>";
            echo "<th title='Editar'>Editar</th>";
            echo "<th title='Borrar'>Borrar</th>";
        echo "</tr>";
    //Fila
        while($arreglo = mysqli_fetch_array($query)){?>
                <tr class="filas">
                    <td><?php echo $arreglo[0]?></td>
                    <td><?php echo $arreglo[1]?></td>
                    <td><?php echo $arreglo[2]?></td>
                    <td><?php echo $arreglo[3]?></td>
                    <td><?php echo $arreglo[4]?></td>
                    <!--<td><?php // echo $arreglo[5]?></td>-->
                    <td><?php echo $arreglo[6]?></td>
                    <td><?php echo $arreglo[7]?></td>
                    <td class="icono-conten">
                        <a href="actualizar_usuario.php?id_usuario=<?php echo $arreglo[0]?>">
                            <img src="assets/img/icon/editar.png" class="icon" title="Editar Usuario">
                        </a>
                    </td>
                    <td class="icono-conten">
                        <a href="../models/borrar_registros.php?id_usuario=<?php echo $arreglo[0]?>"
                            onclick="return confirmBorrar();">
                            <img src="assets/img/icon/borrar.png" class="icon" title="Borrar Usuario">
                        </a>
                    </td>
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
                    <a href="agregar_usuario.php" title="Agregar Usuario" class="menu-item">
                        <img src="assets/img/icon/agregar_usuario.png" class="icon-agregar" id="icon-agregar">
                    </a>
                    <a href="#abajo" title="Ir Abajo" class="menu-item">
                        <img src="assets/img/icon/flecha.png" class="icon-agregar flecha-abajo" id="icon-agregar">
                    </a></div>
            </div>
        </div>
        <div id="abajo"></div>
    </main>
    <?php include 'partials/footer.php';?>