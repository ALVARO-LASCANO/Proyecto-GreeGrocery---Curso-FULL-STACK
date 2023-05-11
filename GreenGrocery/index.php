<?php
include('conexion.php');

$sql = "SELECT * FROM productos";
$rta = mysqli_query($conexion, $sql);
mysqli_close($conexion);

?>

<!doctype html>
<html lang="es">

<head>
    <?php $titulo = "Sistema";
    include('partes/head.php'); ?>
</head>

<body>

    <?php include('partes/menu.php') ?>
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2500">
                        <img src="archivos/slide1.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="archivos/slide2.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="archivos/slide3.jpg" class="d-block w-100" alt="...">

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="bg-dark text-secondary mt-4 px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Greengrocery</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">
                        La mejor calidad al mejor precio.
                    </p>

                </div>
            </div>
        </div>

        <!-- PRODUCTOS -->
        <div class="row mt-5">
            <?php
            while ($consulta = mysqli_fetch_array($rta)) {
                echo "
                            <div class='col-sm-12 col-md-6 col-lg-4 mb-3 mt-3 mb-sm-0'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $consulta['tituloProducto'] . "</h5>
                                    <img src=" . $consulta['urlProducto'] . " class='card-img-top'>
                                    <h5 class='card-text'> $ " . $consulta['precioProducto'] . "</h5>
                                    
                                </div>
                            </div>
                        </div>
                            ";
            }
            ?>



        </div>
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>