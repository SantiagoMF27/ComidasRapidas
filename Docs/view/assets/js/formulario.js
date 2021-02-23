//Abrir actualizar datos
let datos = document.getElementById('abrir-from')
let cerrarDtaos = document.getElementById('cerrar')

datos.addEventListener("click", e => {
    e.preventDefault()
    document.getElementById('actual-from').style.display = "block"
});
//Cerrar login actualizar datos
cerrarDtaos.addEventListener("click", e => {
    e.preventDefault()
    document.getElementById('actual-from').style.display = "none"
});