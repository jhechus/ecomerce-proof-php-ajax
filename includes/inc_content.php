<!--content-->
<div class="container-fluid py-3">
  <div class="row">

    <!-- Productos -->
    <div class="col-xl-8">
      <h1> Productos </h1>
      <div class="row">
        
       <?php foreach ($data['products'] as $p): ?>
        <div class="col-3 mb-3">
          <div class="card">
            <img src="<?php echo IMAGES.$p['imagen']; ?>" alt="<?php echo $p['name']; ?>" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> <?php echo $p['name'] ?> </h5>
              <p class="text-success"> <?php echo format_currency($p['price']); ?> </p>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>


    <!-- carrito -->
    <div class="col-xl-4 bg-light">
    <h1> Carrito </h1>
    <!-- cart content -->
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
    <button class="btn btn-sm btn-danger"> Vaciar carrito </button>
    <!-- end cart content -->
<br><br>
    <!-- cart total -->
    <table class="table">
      <tr>
        <th class="border-0">Subtotal
          <td class="text-success text-right border-0">$250</td>
        </th>
      </tr>
      <tr>
        <th>Envio
          <td class="text-success text-right"> $ <?php echo SHIPPING_COST; ?></td>
        </th>
      </tr>
      <tr>
        <th>Total
          <td class="text-success text-right"> <h3 class="font-weight-bold"> $300 </h3></td>
        </th>
      </tr>
    </table>
    <!-- end cart total -->

    <!-- pay now button -->
    <button class="btn btn-info btn-lg btn-block"> Pagar ahora </button>
    <!-- end pay now button -->

    </div>
  </div>
</div>
<!-- end content -->