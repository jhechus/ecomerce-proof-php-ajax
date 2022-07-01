<?php

// PHP y todas sus funciones predefinidas estan todas atras de esto 
require_once 'app/config.php';

$data =
[ 
    'products' => get_products()
];

//add_to_cart(1); 
//session_destroy();

//renderizado de la vista
render_view('carro', $data);
;

?>
