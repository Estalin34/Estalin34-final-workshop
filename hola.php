<?php
$host = "localhost"; // Cambia esto con la dirección de tu servidor MySQL
$usuario = "root"; // Cambia esto con tu nombre de usuario de MySQL
$contrasena = ""; // Cambia esto con tu contraseña de MySQL
$base_de_datos = "taller"; // Cambia esto con el nombre de tu base de datos

// Realizar la conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa"; // Este mensaje se mostrará si la conexión es exitosa

// Aquí puedes realizar operaciones con la base de datos

// Cerrar la conexión al finalizar
$conexion->close();
?>
