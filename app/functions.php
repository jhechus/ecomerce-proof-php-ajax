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