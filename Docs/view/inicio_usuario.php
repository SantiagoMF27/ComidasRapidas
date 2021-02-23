<?php 
    include 'partials/head.php';
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
<title>Bienvenido <?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"];?></title>
</head>

<body>
<?php include 'partials/menu.php';?>
    <main>
        <!--Portada -->
        <section class="portada-ini-user" title="Bienvenido">
            <div class="portada-titulo-ini-user">
                <h1 class="portada-titulo-nombre-ini-user" title="Comidas Rapidas">
                    <strong>Bienvenido</strong> <?php echo $_SESSION["nombre"]; ?></h1>
                <p>Comidas Suánfonson -
                    <span><?php echo $_SESSION["id_tipo_user"] == 1 ? 'Administrador' : 'Cliente'; ?></span></p>
            </div>
            <!--Ola-->
            <?php include 'partials/ola.php';?>
        </section><br><br><br><br>
        <!--Contenedor de los Productos-->
        <section >
            <div class="subtitulo-ini-user" >
                <h2>Nuestros Productos</h2>
            </div>
               <!--Buscador-->
               <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="busqueda_ini.php" class="site-block-top-search" method="GET">
                <span class="icon icon-search2"></span>
                <input type="text" name="busqueda" class="form-control border-0" placeholder="Buscar">
              </form>
            </div>
            <div class="ñero-contenido santiago">
            <?php
            //Para ver los productos
            include_once('../controllers/conexion.php');
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
            <?php } }?>
            </div> 
        </section>
        <br><br><br><br><br>
    </main>
<?php include 'partials/footer.php';?>