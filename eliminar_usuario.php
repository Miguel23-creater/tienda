<?php

print_r($_POST);
require("conection.php"); //conecta con la BD

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar el nombre de usuario a eliminar del formulario
$id = $_GET['id'];

// Consulta SQL para eliminar el usuario
$sql = "DELETE FROM usuarios WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Usuario eliminado exitosamente.";
} else {
    echo "Error al eliminar el usuario: " . $conn->error;
}
require("tienda.php");
$conn->close();
?>
