//Funciones para Confirmar Acciones

//Funcion para Confirmar Borrar 
function confirmBorrar() {
    var respuesta = confirm("¿Seguro que deseas Borrar el Registro?");
    if (respuesta == true) {
        return true;
    }else if (respuesta == false) {
        return false;
    }else{
        alert("¡Error de Confirmacion!");
    }
}

//Funcion para Confirmar Cerrar Sesion 
function confirmCerrar() {
    var respuesta = confirm("¿Seguro que deseas Salir?");
    if (respuesta == true) {
        return true;
    }else if (respuesta == false) {
        return false;
    }else{
        alert("¡Error de Confirmacion!");
    }
}

//Funcion para Confirmar Borrar Cliente 
function confirmBorrarCliente() {
    var respuesta = confirm("¿Seguro que deseas Borrar el Cliente?");
    if (respuesta == true) {
        return true;
    }else if (respuesta == false) {
        return false;
    }else{
        alert("¡Error de Confirmacion!");
    }
}
