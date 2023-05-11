<?php
include('../conexion.php');

$sql= "SELECT * FROM usuarios";
$rta=mysqli_query($conexion, $sql);
mysqli_close($conexion);

?>

<!doctype html>
<html lang="es">

<head>
    <?php $titulo= "Listado de usuarios"; include('../partes/head-admin.php'); ?>
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
                    <!--Partes -->
                    <div class="container">
                        <div class="row">

                        <h3><?php echo $titulo; ?></h3>
                        </div>
                        <div class="row d-flex justify-content-start">
                            <?php
                            if (isset($_GET['ok'])) {
                                $nombre = $_GET['ok'];
                                echo '
                        <div class ="bg-success d-flex justify-content-center text-white"> <p>El usuario ' . $nombre . ' modificado con éxito</p> </div>
                    ';
                            }
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($consulta = mysqli_fetch_array($rta)) {
                                        echo "
                            <tr>
                                <th>" . $consulta['idUsuario'] . "</th>
                                <td>" . $consulta['nombre'] . "</td>
                                <td>" . $consulta['apellido'] . "</td>
                                <td>" . $consulta['email'] . "</td>
                                <td> <img src=../" . $consulta['avatar'] . " width='80px' ></td>
                                <td>
                                    <button class='btn btn-success'><a href='modificar-usuario.php?id=" . $consulta['idUsuario'] . "'><span class='material-symbols-outlined'>edit_note</span></a></button>
                                    <button class='btn btn-danger'> <a href='eliminarUsuario.php?id=" . $consulta['idUsuario'] . "'><span class='material-symbols-outlined'>delete</span></a></button>
                                </td>
                            </tr>
                            ";
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- FIN PARTES -->
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