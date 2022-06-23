<?php

require_once 'app/config.php';
//funcion para sacar un json en pantalla
//echo json_encode($response);

//que peticion esta solicitando
if(!isset($_POST['action'])){
    http_response_code(403);
    echo json_encode(['status' => 403]);
    die;
}

$action = $_POST['action'];

//GET
switch ($action) {
    case 'get':
        $html = '<h2> Estoy cargando con ajax';
        json_output(200, 'OK', $html);
        break;
    
    default:
        # code...
        break;
}