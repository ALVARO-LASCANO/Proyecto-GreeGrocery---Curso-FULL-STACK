<?php

include('../funciones.php');
if ($_POST) {
    $errores = guardarProducto($_POST);
}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php $titulo = "Crear Producto";
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
              
                    <div class="container">
                        <div class="row">

                            <h3><?php echo $titulo; ?></h3>
                        </div>
                        <div class="row d-flex justify-content-start">
                            <?php
                            if (isset($errores)) {
                                echo '
                <div class ="bg-danger d-flex justify-content-center text-white">';
                                foreach ($errores as $error) {

                                    echo $error . "<br>";
                                }
                                echo '</div>';
                            };
                            ?>

                            <form action="crearProductos.php" method="POST" enctype="multipart/form-data" class="col-sm-12 col-lg-6 mt-2">

                                <div class="col-12">
                                    <label for="" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" name="titulo">
                                    <label for="" class="form-label">Precio</label>
                                    <input type="text" class="form-control" name="precio">
                                    <label for="" class="form-label">Imagen </label>
                                    <input type="file" class="form-control" name="imgProducto">
                                </div>
                                <input class="btn btn-success mt-3" type="submit" value="ENVIAR">


                            </form>
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