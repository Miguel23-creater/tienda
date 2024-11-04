<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href='lista_usuario.php'>Lista usuarios</a></li>
                <li><a href='registro_user.html'>Registra usuario</a></li>

            </ul>
        </nav>
    </header>
    <section>
    <h2>Lista de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </tr>
        <?php
        
// Conectarse a la base de datos (asegúrate de cambiar estos valores)
require("conection.php"); //conecta con la BD

// Consulta SQL para obtener la lista de usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td><a href='editar_usuario.php?id=" . $row['id'] . "'>Editar</a> | <a href='eliminar_usuario.php?id=" . $row['id'] . "'>Eliminar</a></td>";
        echo "</tr>";
    }
} else {
    echo "No hay usuarios registrados.";
}

$conn->close();
?>
      
    </table>
    </section>
</body>
</html>
