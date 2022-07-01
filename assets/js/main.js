$( document ).ready(function() {
    
    //cargar el carro
    function load_cart(){
        //se declara variable para poder trabajar mas comodamente
    var load_wrapper = $('#load_wrapper'), 
    wrapper = $('#cart_wrapper'),
    action = 'get';

    //peticion de ajax
  $.ajax({
        url: 'ajax.php',
        type: 'POST',
        dataType: 'JSON',
        data:
        { action},
        beforeSend: function(){
            load_wrapper.waitMe();
        }
        //promesas
    }).done(function(res){
        if (res.status === 200) {
            wrapper.html(res.data);
        }   
    }).fail(function(err){
        console.log('err');
        swal.fire('lo siento','ha ocurrido un error', "error");
        return false;
    }).always(function(){
        console.log('ejecutando always');
        setTimeout(() => {
            load_wrapper.waitMe('hide');
        }, 1000);
    });
    };
    load_cart();


    //agregar al carro con el boton
    //sumar las cantidades si ya existe el producto en el carro
    $('.do_add_to_cart').on('click', function(event) {
        //se previene alguna accion con el preventdefault
        event.preventDefault();
        var id = $(this).data('id'),
        cantidad = $(this).data('cantidad'),
        action = 'post';

        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            data:{
                action, 
                id,
                cantidad
            },
            beforeSend: function () {
                console.log('agregando...');
            }
        }).done(function(res){
            if(res.status === 201) {
                swal.fire('agregando producto al carro' , 'success');
                load_cart();
                return;
            } else {
                swal.fire('lo siento',res.msg, "error");
                return;
            }
        }).fail(function(err){

        }).always(function(){

        });
    });

});