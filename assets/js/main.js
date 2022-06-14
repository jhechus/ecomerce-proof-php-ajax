$( document ).ready(function() {
    
    //cargar el carro
    function load_cart(){
        //se declara variable para poder trabajar mas comodamente
    var wrapper = $('#cart_wrapper'),
    action = 'get';

        //wrapper es la funcion mas facil que esta en el contenido
        //con el wait se pone la opcion de cargando
    wrapper.waitMe('hide');
    };
    load_cart();


});