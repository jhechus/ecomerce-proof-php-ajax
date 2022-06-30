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
        $cart = get_cart();
        $output = ' ';
        if (!empty($cart['products'])) {
            $output .= '
          <div class="table-responsive">
            <table class="table table-hover table-border table-sm">
              <thead>
                <tr>
                  <th> Producto </th>
                  <th class="text-center"> Precio   </th>
                  <th class="text-center"> Cantidad </th>
                  <th class="text-center"> Total    </th>
                </tr>
              </thead>
              <tbody>';
              foreach ($cart['products'] as $p) {
                $output .=
                  '<tr>
                    <td class="align-middle">
                    '.$p['name'].'
                      <small class="d-block text-muted">SKU '.$p['sku'].' </small>
                    </td>
                    <td class="align-middle text-center">'.format_currency($p['price']).'</td>
                    <td class="align-middle text-center" width="5%"> 
                      <input type="number" class="form-control form-control-sm" min="0" max="40" value="'.$p['cantidad'].'"> </td>
                    <td class="align-middle text-center">'.format_currency(floatval($p['cantidad'] * $p['price'])).'</td>
                    <td class="text-right align-middle"><i class="fas fa-times text-danger"></i></td>
                  </tr>';
                }
                
                $output .= 
                  '</tbody>
                  </table>
                  </div>
                  <button class="btn btn-sm btn-danger"> Vaciar carrito </button>';
        } else {
            $output .= '
            <div class="text-center">
            <img src="'.IMAGES.'carvacio.png'.'" title="no hay productos" class="img-fluid" style="width: 150px;">
            <p class="text-muted"> No hay productos en el carrito </p>
            </div>';
        }
        $output .= '
        
      <!-- end cart content -->
      <br><br>
      <!-- cart total -->
      <table class="table">
        <tr>
          <th class="border-0">Subtotal
            <td class="text-success text-right border-0">' .format_currency($cart['cart_totals']['subtotal']). '</td>
          </th>
        </tr>
        <tr>
          <th>Envio
            <td class="text-success text-right">' .format_currency($cart['cart_totals']['shipment']). '</td>
          </th>
        </tr>
        <tr>
          <th>Total
            <td class="text-success text-right"> <h3 class="font-weight-bold">' .format_currency($cart['cart_totals']['total']). '</h3></td>
          </th>
        </tr>
      </table>
      <!-- end cart total -->

      <!-- pay now button -->
      <button class="btn btn-info btn-lg btn-block" disabled> Pagar ahora </button>
      <!-- end pay now button -->';
        json_output(200, 'OK', $output);
        break;
    
    default:
        # code...
        break;
}