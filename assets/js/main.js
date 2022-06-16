$( document ).ready(function() {
    
    //cargar el carro
    function load_cart(){
        //se declara variable para poder trabajar mas comodamente
    var wrapper = $('#cart_wrapper'),
    action = 'get';

    //peticion de ajax
  $.ajax({
        url: 'app/ajax.php',
        type: 'GET',
        dataType: 'JSON',
        beforeSend: function(){
            wrapper.waitMe();
        }
    }).done(function(res){
        console.log('res');
    }).fail(function(err){
        console.log('err');
        swal.fire('lo siento','ha ocurrido un error', "error");
        return false;
    }).always(function(){
        console.log('ejecutando always');
        setTimeout(() => {
            wrapper.waitMe('hide');
        }, 2000);
    });
    };
    load_cart();


});