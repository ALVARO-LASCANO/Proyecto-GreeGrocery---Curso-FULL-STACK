
<?php
include('../funciones.php');

if(isset($_GET['id'])){ //si existe el id del usuario
    //buscar solo un usuario con el id correspondiente
    $tabla = "productos";
    $campo = "idProducto";
    $consulta = buscar($_GET['id'],$tabla,$campo); //Nos trae un objeto

        //convierte el objeto a array
    $datos= mysqli_fetch_array($consulta);

}

if($_POST){
    $errores = modificarProducto($_POST);
}

?>

<!doctype html>
<html lang="es">

<head>
<?php $titulo= "Modificar Producto"; include('../partes/head.php'); ?>
</head>

<body>
    <style>
        a {
            color: white important;
        }
    </style>
    <?php include('../partes/menu.php') ?>
    <div class="container">
        <div class="row">

        <h3><?php echo $titulo; ?></h3>
        </div>
        <div class="row d-flex justify-content-center">
        <?php 
        if(isset($errores)){
            echo '
            <div class ="bg-danger d-flex justify-content-center text-white">';
            foreach($errores as $error){
                
                echo $error . "<br>";
            }
            echo '</div>';
        };
    ?>
            <form action="modificarProducto.php" method="POST" enctype="multipart/form-data" class="col-sm-12 col-lg-6 mt-2">

                <div class="col-12">
                    <input type="text" name="idproducto" value="<?php echo $datos['idProducto'] ?>" hidden>
                    <label for="" class="form-label">Título</label>
                    <input type="text" class="form-control" name="tituloProducto" value="<?php echo $datos['tituloProducto'] ?>">
                    <label for="" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precioProducto" value="<?php echo $datos['precioProducto'] ?>">
                </div>
                <input class="btn btn-success mt-3" type="submit" value="ENVIAR">


            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>