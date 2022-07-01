<?php

function get_products() {
   $products = require APP.'product.php';
   return $products;
}

function get_product_by_id($id){
   $products = get_products();
   foreach ($products as $i => $v) {
    if($v['id'] == $id){
     return $products[$i];
    }
   }
   return false;
}

// render_view(carro.view)
function render_view($view , $data = []) {
   if(!is_file(VIEWS.$view.'.php')) {
    //si no existe has esto
    echo 'No existe la vista '.$view;
    die;
   }

   require_once VIEWS.$view.'.php';
}

function format_currency($number, $symbol = '$'){
   if(!is_float($number) && !is_integer($number)){
    $number = 0;
   }

   return $symbol.number_format($number,2,'.',',');
}

//funciones del carrito (carga)

function get_cart() {

   if(isset($_SESSION['cart'])){
      $_SESSION['cart']['cart_totals'] = calculate_cart_totals();
    return $_SESSION['cart'];
   }

   $cart =
   [
    'products'       => [],
    'cart_totals'    => calculate_cart_totals(),
    'payment_url'    => NULL
   ];

   $_SESSION['cart'] = $cart;
   return $_SESSION['cart'];
}


function calculate_cart_totals(){
   //en caso de que el carro no exista, se inicializa
   ///si no hay productos pero el carro ya existe
   if (!isset($_SESSION['cart']) || empty($_SESSION['cart']['products'])) {
    $cart_totals =
    [
     'subtotal' => 0,
     'shipment' => 0,
     'total' => 0,
    ];
    return $cart_totals;
   }

   // calcular los totales segun los productos del carrito
   $subtotal = 0;
   $shipment = SHIPPING_COST;
   $total = 0;

   // si ya hay productos y hay que sumar las cantidades
   foreach ($_SESSION['cart']['products'] as $p) {
      $_total = floatval($p['cantidad'] * $p['price']);
      $subtotal = floatval($subtotal + $_total);
   }

   $total = floatval($subtotal + $shipment);
   $cart_totals =
     [
      'subtotal' => $subtotal,
      'shipment' => $shipment,
      'total' => $total,
     ];
     return $cart_totals;  
}

function add_to_cart($id_producto , $cantidad = 1){
   $new_product =
   [
      'id'       => NULL,
      'sku'      => NULL,
      'name'     => NULL,
      'cantidad' => NULL,
      'price'   => NULL,
      'imagen'   => NULL
   ];

   $product = get_product_by_id($id_producto);
   // algo paso o no hay producto
   if (!$product) {
      return false;
   }

   $new_product =
   [
      'id'       => $product['id'],
      'sku'      => $product['sku'],
      'name'     => $product['name'],
      'cantidad' => $cantidad,
      'price'    => $product['price'],
      'imagen'   => $product['imagen']
   ];

   //si no existe el carro, no existe el producto
   //lo agregamos directamente
   if (!isset($_SESSION['cart']) || empty($_SESSION['cart']['products'])) {
      $_SESSION['cart']['products'][] = $new_product;
      return true;
     }

   // si se agrega pero vamos a loopear el array de todos los productos
   // para buscar uno con el mismo id si existe
   foreach ($_SESSION['cart']['products'] as $i => $p) {
      if ($p['id'] == $id_producto) {
         $_cantidad = $p['cantidad'] + 1;
         $p['cantidad'] = $_cantidad;
         $_SESSION['cart']['products'][$i] = $p;
         return true;
      } 
   }
   $_SESSION['cart']['products'][] = $new_product;
   return true;
   
}

function json_output($status = 200, $msg = '' , $data = []){
   http_response_code($status);
   $r =
   [
    'status' => $status,
    'msg' => $msg,
    'data' => $data
   ];
echo json_encode($r);
die;
   }