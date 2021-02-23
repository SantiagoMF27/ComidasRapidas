//Animacion todo el menu pegajoso
window.addEventListener('scroll', function () {
    var cabecera = document.querySelector('header');
    cabecera.classList.toggle('sticky', window.scrollY > 0);
});

//Animacion todo el menu menu Responsive
function toggleMuenu() {
    var menuToggle = document.querySelector('.toggle');
    var menu = document.querySelector('.menu');
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');   
}