<?php

include('../conexion.php');
$id= $_GET['id'];

$sql= "DELETE FROM usuarios WHERE idUsuario = ". $id;

mysqli_query($conexion, $sql);
mysqli_close($conexion);
header("location:listado-usuarios.php")
?>