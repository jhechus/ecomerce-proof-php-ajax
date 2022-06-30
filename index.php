<?php

// PHP y todas sus funciones predefinidas estan todas atras de esto 
require_once 'app/config.php';

$data =
[ 
    'products' => get_products()
];

//$producto = get_product_by_id(5);
add_to_cart(5); 
//print_r(get_cart());
//session_destroy();

//renderizado de la vista
render_view('carro', $data);
;

?>
