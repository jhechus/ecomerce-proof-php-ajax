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
      return $_SESSION['cart'];
   }

 


   $cart =
   [
      'products' => [],
      'total_products' => 0,
      'subtotal' => 0,
      'shipment' => 0,
      'total' => 0,
      'payment_url' => NULL
   ];

   $_SESSION['cart'] = $cart;
   return $_SESSION['cart'];
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