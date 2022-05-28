<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Ecommerce prof </title>
 
  <!--boostrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

 <!--fontawosame--> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
 
<!-- wait Me -->
<link rel="stylesheet" href="assets/plugins/waitme/waitMe.min.css">

</head>

<body>

<!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Carrito</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Buscar">
        <button class="btn btn-primary" type="button">Buscar</button>
      </form>
    </div>
  </div>
</nav> 
<!-- end navbar -->

<!--content-->
<div class="container-fluid py-3">
  <div class="row">

    <!-- Productos -->
    <div class="col-xl-8">
      <h1> Productos </h1>
      <div class="row">
        
        <div class="col-3 mb-3">
          <div class="card">
            <img src="https://placeimg.com/300/300/tech" alt="Producto" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> Texto del producto Lorem ipsum dolor </h5>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>

        <div class="col-3 mb-3">
          <div class="card">
            <img src="https://placeimg.com/300/300/tech" alt="Producto" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> Texto del producto Lorem ipsum dolor </h5>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>

        <div class="col-3 mb-3">
          <div class="card">
            <img src="https://placeimg.com/300/300/tech" alt="Producto" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> Texto del producto Lorem ipsum dolor </h5>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>

        <div class="col-3 mb-3">
          <div class="card">
            <img src="https://placeimg.com/300/300/tech" alt="Producto" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> Texto del producto Lorem ipsum dolor </h5>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>

        <div class="col-3 mb-3">
          <div class="card">
            <img src="https://placeimg.com/300/300/tech" alt="Producto" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> Texto del producto Lorem ipsum dolor </h5>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>

        <div class="col-3 mb-3">
          <div class="card">
            <img src="https://placeimg.com/300/300/tech" alt="Producto" class="card-img-top">
            <div class="card-body text-right p-2">
              <h5 class="card-title text-truncate"> Texto del producto Lorem ipsum dolor </h5>
              <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Agregar al carrito"><i class="fas fa-plus"></i> Agregar al carrito </button>
            </div>
          </div>
        </div>

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
          </tr>

          <tr>
            <td class="align-middle"> Producto 2
              <small class="d-block text-muted"> Amor anillo </small>
            </td>
            <td class="align-middle text-center" width="5%"> 
              <input type="number" class="form-control form-control-sm" min="0" max="40" value="1"> </td>
            <td class="align-middle text-center"> $60 </td>
          </tr>

          <tr>
            <td class="align-middle"> Producto 3
              <small class="d-block text-muted"> celular </small>
            </td>
            <td class="align-middle text-center" width="5%"> 
              <input type="number" class="form-control form-control-sm" min="0" max="40" value="1"> </td>
            <td class="align-middle text-center"> $180 </td>
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
          <td class="text-success text-right">$50</td>
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


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <!-- JavaScript Bundle with Popper (boostrap) -->
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

<!-- sweet alert 2 -->
<script 
src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script>
  Swal.fire("hola", "cogemos? OwO", "success");
</script> -->

<!-- waitMe -->
<script 
src="assets/plugins/waitme/waitMe.min.js"></script>
<!-- <script>
   $('body').waitMe('hide');
</script> -->

<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>



</body>
</html>