//Boton flotante
const   btnMenu = document.querySelector('#menu'),
        menuContent = document.querySelector('.boton-mas');

btnMenu.addEventListener('click', () =>{
    menuContent.classList.toggle('menu-active');
});