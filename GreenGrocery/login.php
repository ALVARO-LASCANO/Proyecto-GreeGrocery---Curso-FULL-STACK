<?php

include('funciones.php');
$email= "";
$pass= "";
if ($_POST) {
    $errores = login($_POST);
    //variables para persistencia
    $email= $_POST['email'];
    $pass= $_POST['pass'];
}

?>


<!doctype html>
<html lang="es">

<head>
    <?php $titulo = "login";
    include('partes/head.php'); ?>
</head>

<body>

    <?php include('partes/menu.php') ?>
    <div class="container">
        <div class="row">
            <h3>Ingreso al sistema</h3>
        </div>
        <div class="row d-flex justify-content-center">
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

            <form action="login.php" method="POST" enctype="multipart/form-data" class="col-sm-12 col-lg-6 mt-2">

                <div class="col-12">
                    <label for="" class="form-label">Ingrese email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>"> <!--el value me da la persistencia de los datos-->
                    <label for="" class="form-label">Ingrese contraseña</label>
                    <input type="password" class="form-control" name="pass" value="<?php echo $pass ?>">
                    <label for="" class="form-label">Ingrese el siguiente texto:</label>
                    
                    <img src="captcha.php" alt="">
                    
                    <input type="text" class="form-control" name="captcha">


                </div>
                <input class="btn btn-success mt-3" type="submit" value="ENVIAR">


            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>