<?php
//Ingreso de usuario y admistrador

session_start();
include_once('conexion.php');
include_once('helps.php');

if (isset($_POST['ingreso'])) {
    $usuario      = validar_campo(trim($_POST['txtUsuario']));
    $contrasena = sha1(validar_campo(trim($_POST['txtPassword'])));

    $sql = ("SELECT * FROM usuario WHERE usuario ='".$usuario."' AND contrasena ='".$contrasena."' ")or die($conexion -> error);
            $resultado = mysqli_query($conexion,$sql);
            $dato=[];
        if(mysqli_num_rows($resultado)){

    while($row = mysqli_fetch_array($resultado)){
        $dato[0] = $row['id_usuario'];
        $dato[1] = $row['nombre'];
        $dato[2] = $row['apellido'];
        $dato[3] = $row['email'];
        $dato[4] = $row['usuario'];
        $dato[5] = $row['contrasena'];
        $dato[6] = $row['id_tipo_user'];
    }

    //Guradamos los datos consultados enla sesion
    $_SESSION['id_usuario']   = $dato[0];
    $_SESSION['nombre']       = $dato[1];
    $_SESSION['apellido']     = $dato[2];
    $_SESSION['email']        = $dato[3];
    $_SESSION['usuario']      = $dato[4];
    $_SESSION['contrasena']   = $dato[5];
    $_SESSION['id_tipo_user'] = $dato[6];

    echo "<script>location.href='../view/inicio_usuario.php'</script>";

    }else {
    echo "<script> alert('¡Datos Incorrectos!'); </script>";
    echo "<script>location.href='../view/ingresar.php'</script>";
    }
}else {
    echo "<script> alert('¡Error de Ingreso!'); </script>";
    echo "<script>location.href='../view/ingresar.php'</script>";
    }
?>