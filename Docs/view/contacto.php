<?php 
    include 'partials/head.php';
    session_start();
?>
<title>
    <?php 
    if (isset($_SESSION['email'])) {
            echo "Contatanos"." ".$_SESSION['nombre']." ".$_SESSION['apellido'];
    }else{
        echo "Suánfonson - Contacto";
    }
    ?>    
</title>
</head>

<body>
    <?php include 'partials/menu.php';?>
    <main class="contacto">
        <div class="formulario-contacto">
            <form action="../controllers/contactenos.php" method="POST">
                <h2>Escribenos tu Mensaje</h2>
                <input    type="text"  placeholder="Nombre Completo" name="name" id="nombre"  pattern="[A-Z a-z].{5,}" autofocus>
                <input    type="email" placeholder="Email"           name="email"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
                <input    type="text"  placeholder="Asunto"          name="asunto" pattern="[A-Z a-z 0-9].{5,}">
                <textarea class="text" placeholder="Tu Mensaje"      name="msg"    required></textarea>
                <input    type="Submit" class="btn" value="Enviar"   name="enviar-msg" title="Enviar Mensaje">
            </form>
        </div>
    </main>
    <?php include 'partials/footer.php';?>