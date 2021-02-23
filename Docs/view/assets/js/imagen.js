//Ver imagen de producto
const imagenes = document.querySelectorAll('.ver-img-carrito-js');
const imagenesLite = document.querySelector('.agregar-imagen');
const contenedorLite = document.querySelector('.imagen-light');

imagenes.forEach(imagen => {
    imagen.addEventListener('click',()=>{
        aparecerImagen(imagen.getAttribute('src'))
    })
});

contenedorLite.addEventListener('click', (e)=>{
    if (e.target !== imagenesLite) {
        contenedorLite.classList.toggle('ver-img-lite')
        imagenesLite.classList.toggle('ver-Imagen')
    }
})
 
const aparecerImagen = (imagen)=>{
    imagenesLite.src = imagen;
    contenedorLite.classList.toggle('ver-img-lite')
    imagenesLite.classList.toggle('ver-Imagen')
}