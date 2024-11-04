<?php 
// Conectarse a la base de datos (asegúrate de cambiar estos valores)
$servername = "localhost";
$username = "root";
$password = "";
$database = "BDtienda";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>