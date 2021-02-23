//Input invalido
let nombre = document.getElementById('nombre');
let apellido = document.getElementById('apellido');
let usuario = document.getElementById('usuario');
let contraseña = document.getElementById('password');
let tipo = document.getElementById('tipo');
let carritoCantidad = document.getElementById('cantidad-carrito');

nombre.oninvalid = function (event) {
    event.target.setCustomValidity('Debe tener al menos una mayuscula y contener mas de 2 caracteres, ejemplo; Santiago');
}
apellido.oninvalid = function (event) {
    event.target.setCustomValidity('Debe tener al menos una mayuscula y contener mas de 2 caracteres, ejemplo; Alvarez');
}
usuario.oninvalid = function (event) {
    event.target.setCustomValidity('Debe tener 5 o mas caracteres y que contega al menos un numero');
}
contraseña.oninvalid = function (event) {
    event.target.setCustomValidity('Debe tener 5 o mas caracteres y que contega al menos una mayuscula, minuscula y un numero');
}
tipo.oninvalid = function (event) {
    event.target.setCustomValidity('Debe tener solo un numero entre 1 y 2; 1: Aministrador y 2: Usuario');
}
carritoCantidad.oninvalid = function (event) {
    event.target.setCustomValidity('Solo se pueden agregaer entre 1 y 20 productos');
}