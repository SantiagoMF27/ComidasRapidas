//Aumentar cantidad en carrito
$(document).ready(function(){
    $(".elegir-cantidad").keyup(function(){
        var cantidad = $(this).val();
        var precio = $(this).data('precio');
        var id = $(this).data('id');
        incrementar(cantidad, precio, id);
    });
    function incrementar(cantidad, precio, id) {
        var mult = parseFloat(cantidad) * parseFloat(precio);
        $(".cant"+id).text("$ " + mult);
        $.ajax({
            method: 'POST',
            url: '../models/actualizarCantidad.php',
            data:{
                id:id,
                cantidad:cantidad
            }
        }).done(function (respuesta) {
            
        });
    }
});
