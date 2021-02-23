<?php 
include_once('../controllers/conexion.php');
if (!isset($_GET['busqueda'])) {
    header("location: index.php");
}

?>
<?php include 'partials/head.php';?>
<title>Buscando Resultados Para <?php echo $_GET['busqueda']?></title>
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
                    <h3>Buscando Resultados Para "<?php echo $_GET['busqueda']?>"</h3>
                </div>
                <!--Ola-->
                <?php include 'partials/ola.php';?>
            </div>
        </section>
            <br><br><br>
        <!--Contenedor de los Productos-->
        <section>
            <!--Productos-->
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
                <?php } } }else {?>
                    <div class="subtitulo-ini-user">
                        <h2>Sin Resultados</h2>
                    </div>
                    <?php }?>
            </div>
        </section>
        <br><br><br><br><br><br>
    </main>
    <?php include 'partials/footer.php';?>