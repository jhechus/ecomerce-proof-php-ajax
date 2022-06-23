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
      <div id="cart_wrapper">
        
      </div>
    </div>
   </div>
 </div>
</div>
<!-- end content -->