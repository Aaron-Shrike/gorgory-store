//Menu Mobile
$(".icon-menu").click(function(){
    $('.menu').toggleClass('open');
    $(this).toggleClass('open');
});

var producto = '';
var precio = '';
var dataForm = '';
// Configura tu llave pública
Culqi.publicKey = 'pk_test_46504ddb7b1b7a3d';
// Usa la funcion Culqi.open() en el evento que desees
$('.buyButton').on('click', function(e) {
    e.preventDefault();
    producto = $(this).attr('data-producto');
    precio = $(this).attr('data-precio');
    // Configura tu Culqi Checkout
    Culqi.settings({
        title: 'Gorgory Store',
        currency: 'PEN',
        description: producto,
        amount: precio
    });
    // Abre el formulario con las opciones de Culqi.settings
    Culqi.open();
});
$('#formulario').submit(function(e) {
    e.preventDefault();
    producto = $('#producto').val();
    precio = $('#precio').val();
    dataForm = $(this).serializeArray();
    // Configura tu Culqi Checkout
    Culqi.settings({
        title: 'Gorgory Store',
        currency: 'PEN',
        description: producto,
        amount: precio
    });
    // Abre el formulario con las opciones de Culqi.settings
    Culqi.open();
});
function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        var email = Culqi.token.email;
        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        var data = {precio: precio, token: token, email: email};
        //hacia tu servidor con Ajax
        $.post('procesar-pago.php', data, function(res){
            alert(res);
            console.log(res);
        });
    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
    }
};