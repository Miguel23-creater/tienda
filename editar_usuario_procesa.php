<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos actualizados</title>
</head>
<body>
<p>
  <?php
  print_r($_POST);  //visualizar los datos enviados crudos

$id =$_POST["id"]; 
$nombre=$_POST["username"];
$pwd=$_POST["password"];
$email=$_POST["email"];

include('conection.php');

$consulta = "UPDATE usuarios SET username='".$nombre."', password='".$pwd."', email='".$email."' where id=".$id;
echo $consulta;
if ($hazconsulta = mysqli_query($conn,$consulta) or die(" no pudo modificarse el registro de la BD")) {	 
echo "El registro se ha actualizado"; } 
header("location: lista_usuario.php");

?>
<p><a href="lista_usuario.php">Ver usuarios</a></p>
 <a href="registro_user.html">Añadir otro usuario</a>
 <div class="inferior">
                    <a href="login.html">Iniciar sesión</a>
                </div>

</body>
</html>