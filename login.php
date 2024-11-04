<?php
//print_r($_POST);

require("conection.php"); //conecta con la BD

// Recuperar datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	// Inicio de sesión exitoso
	session_start();
	$_SESSION['username'] = $username;
	header("Location: carrito.php"); // Redirige a la página de inicio del sistema de ventas en línea
} else {
	// Inicio de sesión fallido
	echo "Nombre de usuario o contraseña incorrectos.";
}

$conn->close();
?>