<?php 
    include_once('../controllers/conexion.php');
    include 'partials/head.php';
?>
<title>Suánfonson - Inicio</title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main>
        <!--Portada -->
        <section>
            <div class="portada-ini">
                <div class="portada-titulo-ini">
                    <h1 class="portada-titulo-nombreini-">
                        Comidas Suánfonson
                    </h1>
                    <h3>Recíbelas en la puerta de tu casa en un Suánfonson</h3>
                </div>
                <!--Ola-->
                <?php include 'partials/ola.php';?>
            </div>
        </section>
        <br><br><br>
        <!--Contenedor de los Productos-->
        <section>
            <div class="subtitulo-ini-user">
                <h2>Nuestros Productos</h2>
            </div>
            <!--Buscador-->
            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="busqueda.php" class="site-block-top-search" method="GET">
                <span class="icon icon-search2"></span>
                <input type="text" name="busqueda" class="form-control border-0" placeholder="Buscar">
              </form>
            </div>
            <!--Productos-->
            <div class="ñero-contenido santiago">
                <?php 
            //Para ver los productos
                $sql = ("SELECT * FROM producto")or die($conexion -> error);
                        $query = mysqli_query($conexion, $sql);
                        while($arreglo = mysqli_fetch_array($query)){
                            if ($arreglo[6] == 'Si') {
                            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border color-de-fondo">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-bold" title="Nombre"><?php echo $arreglo[1];?></h4>
                        </div>
                        <div class="card-body">
                            <a href="ingresar.php">
                                <img src="<?php echo $arreglo[5];?>" class="card-img-top"
                                    title="<?php echo $arreglo[1];?>">
                            </a>
                            <h1 class="card-title pricing-card-title precio">
                                <span class="" title="Precio">$ <?php echo $arreglo[2];?></span>
                            </h1>
                            <a href="ingresar.php" title="Inicia Sesión para Comprar" class="btn btn-block btn-primary"
                                data-id="1">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                <?php } }?>
            </div>
        </section>
        <br><br><br><br><br><br>
    </main>
    <?php include 'partials/footer.php';?>