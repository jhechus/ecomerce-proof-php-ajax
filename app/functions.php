<?php

function get_products() {
   $products = require_once APP.'product.php';
   return $products;
}

function render_view($view , $data = []) {
   if(!is_file(VIEWS.$view.'.php')) {
      //si no existe has esto
      echo 'No existe la vista '.$view;
      die;
   }

   require_once VIEWS.$view.'.php';
}