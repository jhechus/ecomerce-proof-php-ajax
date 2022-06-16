<?php

require_once 'app/config.php';
//respuesta a ajax
$products = get_products();
$response =
[
    'status' => 200,
    'mensaje' => 'primer respuesta de ajax',
    'data' => $products,
];

echo json_encode($response);