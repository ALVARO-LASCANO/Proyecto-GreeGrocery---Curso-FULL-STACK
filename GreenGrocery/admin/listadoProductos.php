<?php
include('../conexion.php');

$sql= "SELECT * FROM productos";
$rta=mysqli_query($conexion, $sql);
mysqli_close($conexion);

?>

<!doctype html>
<html lang="es">

<head>
    <?php $titulo= "Listado de productos"; include('../partes/head-admin.php'); ?>
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
                        <div class="row d-flex justify-content-center">
                            <?php
                            if (isset($_GET['ok'])) {
                                $nombre = $_GET['ok'];
                                echo '
                        <div class ="bg-success d-flex justify-content-center text-white"> <p>El producto ' . $nombre . ' modificado con éxito</p> </div>
                    ';
                            }
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($consulta = mysqli_fetch_array($rta)) {
                                        echo "
                                        <tr>
                                            <th>" . $consulta['idProducto'] . "</th>
                                            <td>" . $consulta['tituloProducto'] . "</td>
                                            <td> $" . $consulta['precioProducto'] . "</td>
                                            <td> <img src=../" . $consulta['urlProducto'] . " width='80px' ></td>
                                            <td>
                                                <button class='btn btn-success btn-sm'><a href='modificarProducto.php?id=" . $consulta['idProducto'] . "'><span class='material-symbols-outlined'>edit_note</span></a></button>
                                                <button class='btn btn-danger btn-sm'> <a href='eliminarProducto.php?id=" . $consulta['idProducto'] . "'><span class='material-symbols-outlined'>delete</span></a></button>
                                            </td>
                                        </tr>
                                        ";
                                    }
                                    ?>


                                </tbody>
                            </table>
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