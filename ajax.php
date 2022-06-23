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
                  <th class="text-center"> Cantidad </th>
                  <th class="text-center"> Total </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle"> Producto 1
                    <small class="d-block text-muted"> Te de hierbabuena </small>
                  </td>
                  <td class="align-middle text-center" width="5%"> 
                    <input type="number" class="form-control form-control-sm" min="0" max="40" value="1"> </td>
                  <td class="align-middle text-center"> $120 </td>
                  <td class="text-right align-middle"><i class="fas fa-times text-danger"></i></td>
                </tr>
    
                <tr>
                  <td class="align-middle"> Producto 2
                    <small class="d-block text-muted"> Amor anillo </small>
                  </td>
                  <td class="align-middle text-center" width="5%"> 
                    <input type="number" class="form-control form-control-sm" min="0" max="40" value="1"> </td>
                  <td class="align-middle text-center"> $60 </td>
                  <td class="text-right align-middle"><i class="fas fa-times text-danger"></i></td>
                </tr>
    
                <tr>
                  <td class="align-middle"> Producto 3
                    <small class="d-block text-muted"> celular </small>
                  </td>
                  <td class="align-middle text-center" width="5%"> 
                    <input type="number" class="form-control form-control-sm" min="0" max="40" value="1"> </td>
                  <td class="align-middle text-center"> $180 </td>
                  <td class="text-right align-middle"><i class="fas fa-times text-danger"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <button class="btn btn-sm btn-danger"> Vaciar carrito </button>';
        } else {
            $output .= '
            <div class="text-center">
            <img src="'.IMAGES.'carvacio.png'.'" title="no hay productos" class="img-fluid" style="width: 150px;">
            <p> No hay productos en el carrito </p>
            </div>';
        }
        $output .= '
        
      <!-- end cart content -->
      <br><br>
      <!-- cart total -->
      <table class="table">
        <tr>
          <th class="border-0">Subtotal
            <td class="text-success text-right border-0">' .format_currency($cart['subtotal']). '</td>
          </th>
        </tr>
        <tr>
          <th>Envio
            <td class="text-success text-right">' .format_currency($cart['shipment']). '</td>
          </th>
        </tr>
        <tr>
          <th>Total
            <td class="text-success text-right"> <h3 class="font-weight-bold">' .format_currency($cart['total']). '</h3></td>
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