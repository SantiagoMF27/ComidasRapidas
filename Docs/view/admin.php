<?php 
    include 'partials/head.php';
    session_start();?>
<?php if (isset($_SESSION["usuario"])) {
            if ($_SESSION["id_tipo_user"] == 2) {
            header("location: inicio_usuario.php");
            }
        }else{
            header("location: index.php");
            session_destroy();
        }
?>
<title>Bienvenido <?php echo $_SESSION["nombre"];?> - Administrador</title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main>
        <!--Portada -->
        <section class="portada-admin" id="arriba">
            <div class="portada-titulo-admin" title="Panel de Control">
                <h1 class="portada-titulo-nombre-admin">
                    <strong>Bienvenido</strong> <?php echo $_SESSION["nombre"]; ?></h1>
                <p>Panel de Control -
                    <span><?php echo $_SESSION["id_tipo_user"] == 1 ? 'Administrador' : 'Usuario'; ?></span></p>
            </div>
            <!--Ola-->
            <?php include 'partials/ola.php';?>
        </section><br><br id='medio'><br><br><br>
        <!--Tabla de Pedidos inner join-->
        <div class="inner-join">
            <div class="contenedor-innner-img-pro">
                <h2>Pedidos</h2>
                <?php
                //Tabla Clientes y pdidos
                require_once("../controllers/conexion.php");
                $sql = ("SELECT p.id_pedido,c.nombre,c.apellido,c.celular,c.ciudad,c.direccion,p.total,p.fecha
                FROM cliente AS c
                INNER JOIN pedido AS p on p.id_pedido = c.id_cliente")or die($conexion -> error);
                $query = mysqli_query($conexion, $sql);
                echo "<table class='tablas'>";
                echo "<tr class='columnas'>";
                    echo "<th title='Id de Producto'>Id</th>";
                    echo "<th title='Nombre de Cliente'>Nombre</th>";
                    echo "<th title='Apellido Cliente'>Apellido</th>";
                    echo "<th title='Celular Cliente'>Celular</th>";
                    echo "<th title='Ciudad Cliente'>Ciudad</th>";
                    echo "<th title='Direccion Cliente'>Direccion</th>";
                    echo "<th title='Tatal Pedido'>Total</th>";
                    echo "<th title='Fecha Pedido'>Fecha</th>";
                echo "</tr>";
                while($arreglo = mysqli_fetch_array($query)){?>
                <tr class='filas'>
                    <td><?php echo $arreglo[0]?></td>
                    <td><?php echo $arreglo[1]?></td>
                    <td><?php echo $arreglo[2]?></td>
                    <td><?php echo $arreglo[3]?></td>
                    <td><?php echo $arreglo[4]?></td>
                    <td><?php echo $arreglo[5]?></td>
                    <td><?php echo $arreglo[6]?></td>
                    <td><?php echo $arreglo[7]?></td>
                </tr>
                <?php }?>
                </table>
            </div>
        </div>
        <br>
        <br>
    </main>
    <?php include 'partials/footer.php';?>