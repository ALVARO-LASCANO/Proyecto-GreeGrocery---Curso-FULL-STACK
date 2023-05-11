<?php
include_once('../funciones.php');
//include_once('../conexion.php');

?>


<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
<?php $titulo = "Panel de control";
    include('../partes/head-admin.php'); ?>

</head>

<body>
  <script>

  </script>
  <!-- navbar sidebar -->
  <?php include_once('../partes/sidebar.php'); ?>


  <!-- top navbar -->
  <?php include_once('../partes/topbar.php'); ?>
  <!-- end top navbar -->


  <!-- cards -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row pt-md-5 mt-md-3 mb-5">
          <div class="col-xl-6 col-sm-6 p-2">
            <div class="card card-common">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                </div>
                <div class="text-right text-secondary">
                  <h5>Productos</h5>

                </div>
                <div class="card-footer text-secondary">
                  <a href="listadoProductos.php" class="btn btn-primary">Listar</a>
                  <a href="crearProductos.php" class="btn btn-primary">Crear</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6 p-2">
            <div class="card card-common">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                </div>
                <div class="text-right text-secondary">
                  <h5>Expenses</h5>
                  <h3>$60</h3>
                </div>
                <div class="card-footer text-secondary">
                  <a href="#" class="btn btn-primary">Listar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6 p-2">
            <div class="card card-common">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <i class="fas fa-users fa-3x text-warning"></i>
                </div>
                <div class="text-right text-secondary">
                  <h5>Usuarios</h5>

                </div>
                <div class="card-footer text-secondary">
                  <a href="listado-usuarios.php" class="btn btn-primary">Listar</a>
                  <a href="crearUsuario.php" class="btn btn-primary">Crear</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6 p-2">
            <div class="card card-common">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <i class="fas fa-chart-line fa-3x text-danger"></i>
                </div>
                <div class="text-right text-secondary">
                  <h5>Visitantes</h5>
                  <h3>200
                  </h3>
                </div>
                <div class="card-footer text-secondary">
                  <a href="#" class="btn btn-primary">Listar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/up.js"></script>
  <script src="js/script.js">

  </script>
</body>

</html>