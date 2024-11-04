<?php
// Conectarse a la base de datos (asegúrate de cambiar estos valores)
require("conection.php"); //conecta con la BD

// Recuperar datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Consulta SQL para insertar un nuevo usuario en la tabla
$sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();
?>
