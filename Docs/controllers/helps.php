<?php

//Función que sirve para validar y limpiar  un campo
//Campo de tipo POST

function validar_campo($campo)
{
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}
?>