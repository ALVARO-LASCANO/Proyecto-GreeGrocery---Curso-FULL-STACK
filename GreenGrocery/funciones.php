<?php
function login($datos)
{
    /*admin@correo.com - Admin123 */
    session_start();
    $email = $datos['email'];
    $pass =  $datos['pass'];
    $captcha = $datos['captcha'];
    $errores = [];
    //validamos los datos
    if ($email == NULL || $email == "") {
        array_push($errores, "Debe completar el email");
    }
    if ($email != NULL) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            array_push($errores, "El formato de email no es válido");
        }
    }
    if ($pass == NULL || $pass == "") {
        array_push($errores, "Debe completar el pass");
    }
                
    //Si no hay errores
    if ($errores == NULL) {
        //hacemos la consulta a la BD
        include('conexion.php');
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $consulta =  mysqli_query($conexion, $sql);
        mysqli_close($conexion);

        $rta = mysqli_fetch_array($consulta);
        // Si rta no es null, es decir que trajo un dato

        if ($rta != NULL) {
            //verificamos captcha
            if ($captcha != $_SESSION['captcha']) {
                array_push($errores, "Los códigos no coinciden");
            } else {

                //verificarmos constraseña
                $verifcar = password_verify($pass, $rta['pass']);
                if ($email == $rta['email'] && $verifcar == TRUE) {
                    //si esta todo ok, iniciamos sesion
                    session_start();
                    $_SESSION = $rta;
                    // reenviamos al panel de control
                    header('location: admin/dashboard.php');
                    exit;
                } else {

                    array_push($errores, "Las contraseñas no coinciden");
                }
            }
        } else {
            array_push($errores, "Usuario no registrado");
        }
    }

    return $errores;
}
function guardarUsuario()
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $errores = [];

    if ($_FILES) {
        if ($_FILES['avatar']['error'] != 0) { // HAY UN ERROR
            array_push($errores, "Hubo un error al cargar el archivo");
        } else { //NO hay error
            $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

            if ($ext != "png" && $ext != "jpeg" && $ext != "jpg") { // Validar la extension
                array_push($errores, " La imagen debe ser .png o .jpeg o .jpg <br>");
            }
        }
    }


    //VALIDAR DATOS
    if ($nombre == NULL || $nombre == "") {
        array_push($errores, "Debe completar el nombre");
    }
    if ($apellido == NULL || $apellido == "") {
        array_push($errores, "Debe completar el apellido");
    }
    if ($email == NULL || $email == "") {
        array_push($errores, "Debe completar el email");
    }
    if ($email != NULL) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            array_push($errores, "El formato de email no es válido");
        }
    }
    if ($pass == NULL || $pass == "") {
        array_push($errores, "Debe completar el pass");
    }

    if ($pass != NULL) {
        if (strlen($pass) < 10) {
            array_push($errores, "La contraseña debe tener al menos 10 caracteres");
        }
        if (!preg_match('`[a-z]`', $pass)) {
            array_push($errores, "La contraseña debe tener al menos 1 minúscula");
        }
        if (!preg_match('`[A-Z]`', $pass)) {
            array_push($errores, "La contraseña debe tener al menos 1 mayúscula");
        }
        if (!preg_match('`[0-9]`', $pass)) {
            array_push($errores, "La contraseña debe tener al menos 1 números");
        }
    }

    if ($errores == NULL) {
        //MOVER ARCHIVO
        move_uploaded_file($_FILES['avatar']['tmp_name'], "archivos/usuarios/" . $nombre . "-" . $apellido . "." . $ext);
        $url = "archivos/usuarios/" . $nombre . "-" . $apellido . "." . $ext;

        include('conexion.php');
        // GUARDAR DATOS
        $sql = "INSERT INTO usuarios 
           (nombre, apellido, email, pass, avatar)
           VALUES ('$nombre','$apellido','$email', '$pass','$url')";

        mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        array_push($errores, "Usuario registrado con éxito");
    }
    return $errores;
}
function buscar($id, $tabla, $campo)
{
    include('conexion.php');

    $sql = "SELECT * FROM $tabla WHERE $campo = " . $id;

    $consulta =  mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    return $consulta;
}

function modificarUsuario($datos)
{

    $idUsuario = $datos['idUsuario'];
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $email = $datos['email'];
    $pass = $datos['pass'];

    include('conexion.php');
    $sql = "UPDATE usuarios SET 
         nombre = '$nombre',
         apellido = '$apellido',
         email = '$email',
         pass= '$pass' WHERE idUsuario= '$idUsuario'";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

    header("location:listado-usuarios.php?ok=$nombre");
}

function guardarProducto($datos)
{
    $titulo = $datos['titulo'];
    $precio = $datos['precio'];
    $fecha = date('d-m-y_His');
    $errores = [];

    if ($_FILES) {
        if ($_FILES['imgProducto']['error'] != 0) { // HAY UN ERROR
            array_push($errores, "Hubo un error al cargar el archivo");
        } else { //NO hay error
            $ext = pathinfo($_FILES['imgProducto']['name'], PATHINFO_EXTENSION);

            if ($ext != "png" && $ext != "jpeg" && $ext != "jpg") { // Validar la extension
                array_push($errores, " La imagen debe ser .png o .jpeg o .jpg <br>");
            }
        }
    }


    //VALIDAR DATOS
    if ($titulo == NULL || $titulo == "") {
        array_push($errores, "Debe completar el titulo");
    }
    if ($precio == NULL || $precio == "") {
        array_push($errores, "Debe completar el precio");
    }



    if ($errores == NULL) {

        //GUARDAR DATOS
        include('conexion.php');
        move_uploaded_file($_FILES['imgProducto']['tmp_name'], "archivos/productos/" . $titulo . "-" . $fecha . "." . $ext);
        $url = "archivos/productos/" . $titulo . "-" . $fecha . "." . $ext;

        $sql = "INSERT INTO productos 
            (tituloProducto, precioProducto, urlProducto)
            VALUES ('$titulo','$precio','$url')";

        mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        array_push($errores, "Producto registrado con éxito");
    }
    return $errores;
}

function modificarProducto($datos)
{

    $idProducto = $datos['idproducto'];
    $titulo = $datos['tituloProducto'];
    $precio = $datos['precioProducto'];

    include('conexion.php');
    $sql = "UPDATE productos SET 
          tituloProducto = '$titulo',
          precioProducto = '$precio' WHERE idProducto= '$idProducto'";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

    header("location:listadoProductos.php?ok=$titulo");
}

//