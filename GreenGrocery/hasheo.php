<?php

$pass = "Admin123";

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "Primer intento: ".$hash;

echo "<br>";

$resultado = password_verify("admin123", $hash);

var_dump($resultado);

?>