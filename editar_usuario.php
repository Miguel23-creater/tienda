<!DOCTYPE html>
<html>
  <html lang="es">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link type="text/css" rel="stylesheet" href="tienda.css" >
	
      <title>Modificar Usuario</title>
    </head>
    <body>
      <section>
    <h1>Editar datos de Usuario</h1>
        <?php
        include('conection.php');
        
        if(!empty($_GET['id'])) { 
          ?>
          Los datos almacenados actualmente son:</p>
          <?php  
          $consulta="SELECT * FROM usuarios where ID=".$_GET['id'];
          //echo $consulta;
          $hazconsulta = mysqli_query($conn,$consulta) or die("no se pudo acceder a la BD");
          $resul = mysqli_fetch_array($hazconsulta);
          //echo $resul['username'];
          ?>

      
      <form action="editar_usuario_procesa.php" method="post">
      <input type="hidden" name="id" value="<?=$resul['id'] ?>" />
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username" value="<?=$resul['username'] ?>" /><br />

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" value="<?=$resul['password'] ?>" /><br />

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" value="<?=$resul['email'] ?>" /><br />

        <input type="submit" value="Guardar" />
        
      </form>
      <?php
}
else {
?>
No fue seleccionado algún registro para modificar.
<?php } 
?>
      </section>
    </body>
  </html>
</html>