<?php

// PHP y todas sus funciones predefinidas estan todas atras de esto 
require_once 'app/config.php';

$data =
[ 
    'products' => get_products()
];


//renderizado de la vista
render_view('carro', $data);
;

?>
