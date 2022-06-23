<?php

// PHP y todas sus funciones predefinidas estan todas atras de esto 
require_once 'app/config.php';

$data =
[ 
    'products' => get_products()
];

$_SESSION['cart']['products'] = get_product_by_id(1);

//renderizado de la vista
render_view('carro', $data);
;

?>
