<?php 
    include 'partials/head.php';
    include_once('../controllers/conexion.php');
    session_start();?>
    <?php if (isset($_SESSION["usuario"])) {
            if ($_SESSION["id_tipo_user"] == 1) {
            header("location: admin.php");
            }
        }else {
            header("location: index.php");
            session_destroy();
        }
?>
<title>Buscando Resultados Para <?php echo $_GET['busqueda']?></title>
</head>

<body>
<?php include 'partials/menu.php';?>
    <main>
        <!--Portada -->
        <section class="portada-ini-user" title="Bienvenido">
            <div class="portada-titulo-ini-user">
                <h1 class="portada-titulo-nombre-ini-user" title="Comidas Rapidas">
                    <strong>Bienvenido</strong> <?php echo $_SESSION["nombre"]; ?></h1>
                <h3>Buscando Resultados Para "<?php echo $_GET['busqueda']?>"</h3>
            </div>
            <!--Ola-->
            <?php include 'partials/ola.php';?>
        </section><br><br><br><br>
        <!--Contenedor de los Productos-->
        <section >
            <div class="ñero-contenido santiago">
            <?php
            //Para ver los productos
            $sql = ("SELECT * FROM producto WHERE 
            nombre LIKE '%".$_GET['busqueda']."%' OR
            precio LIKE '%".$_GET['busqueda']."%' OR
            descripcion LIKE '%".$_GET['busqueda']."%' OR
            existencias LIKE '%".$_GET['busqueda']."%'
            ")or die($conexion -> error);
            $query = mysqli_query($conexion, $sql);
                    if (mysqli_num_rows($query) > 0) {
                    while($arreglo = mysqli_fetch_array($query)){
                        if ($arreglo[6] == 'Si') {
                        ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border color-de-fondo">
                    <div class="card-header">
                            <h4 class="my-0 font-weight-bold" title="Nombre"><?php echo $arreglo[1];?></h4>
                        </div>
                        <div class="card-body">
                            <a href="detalles_productos.php?id=<?php echo $arreglo[0];?>">
                                <img src="<?php echo $arreglo[5];?>" class="card-img-top" title="Ver Detalles de <?php echo $arreglo[1];?>">
                            </a>
                            <h1 class="card-title pricing-card-title precio">
                                <span class="" title="Precio">$ <?php echo $arreglo[2];?></span>
                            </h1>
                            <a href="carrito.php?id=<?php echo $arreglo[0];?>" title="Agregar al Carrito para Comprar"
                                class="btn btn-block btn-primary" data-id="1">Agregar al Carrito</a>
                        </div>
                    </div>
              </div>
            <?php } } }else {?>
                    <div class="subtitulo-ini-user">
                        <h2>Sin Resultados</h2>
                    </div>
                    <?php }?>
            </div> 
        </section>
        <br><br><br><br><br>
    </main>
<?php include 'partials/footer.php';?>