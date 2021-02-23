//Envio de datos por ajax para borrar registros del carrito
$(document).ready(function(){
    $(".btn-eliminar").click(function(event){
        event.preventDefault();
        var id = $(this).data('id');
        var boton = $(this);
        $.ajax({
            method: 'POST',
            url: '../models/elimiarCarrito.php',
            data:{
                id:id
            }
        }).done(function (respuesta) {
            boton.parent('td').parent('tr').remove();
        });
    });
});
