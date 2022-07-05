let timerInterval

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
                Swal.fire({
                            title: 'GRACIAS POR SU COMPRA!',
                            html: 'Agregando producto al carrito',
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            },
                            willClose: () => {
                            clearInterval(timerInterval)
                            }
                            }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('se agrego el producto')
                            }
                            })
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

    //borrar un articulo
    $('body').on('click', '.do_delete_from_cart' , delete_from_cart);
    function delete_from_cart(event) {
        var confirmation,
        id = $(this).data('id'),
        action = 'delete';

        confirmation = confirm('Estas seguro?')

        if(!confirmation) return;

        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            dataType: 'JSON',
            data:
            {
                action,
                id
            }
        }).done(function(res){
            if(res.status === 200) {
                Swal.fire({
                    html: 'Eliminando producto',
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    },
                    willClose: () => {
                    clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('se borro el producto')
                        }
                        })
                load_cart();
                return;
            } else {
                swal.fire('lo siento',res.msg, "error");
                return;
            }
        }).fail(function(err){
            swal.fire('Rayos', 'intenta de nuevo', 'error');
        }).always(function(){
        });
        
    }

    //vaciar carro
    $('body').on('click' , '.do_destroy_cart' , destroy_cart);
    function destroy_cart(event) {
        var confirmation,
        action = 'destroy';

        confirmation = confirm('Estas seguro?')

        if(!confirmation) return;

        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            dataType: 'JSON',
            data:
            {
                action
            }
        }).done(function(res){
            if(res.status === 200) {
                swal.fire('eliminando productos');
                load_cart();
                return;
            } else {
                swal.fire('lo siento',res.msg, "error");
                return;
            }
        }).fail(function(err){
            swal.fire('Rayos', 'intenta de nuevo', 'error');
        }).always(function(){

        });
    }

});