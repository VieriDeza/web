
<?php
// datos de conexión a la base de datos
$host = "localhost"; // dirección del servidor MySQL
$user = "id20682952_vieri2006"; // nombre de usuario de MySQL
$pass = "ODKOL&WKjzh8|T4a"; // contraseña de MySQL
$dbname = "id20682952_tisg_pagina_formulario"; // nombre de la base de datos

// establecer la conexión a la base de datos
$conn = mysqli_connect($host, $user, $pass, $dbname);

// verificar si hay errores de conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
