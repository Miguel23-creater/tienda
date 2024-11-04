<?php
session_start();

if (!isset($_SESSION['silla'])) {
    $_SESSION['silla'] = 1;
} else {
    $_SESSION['silla']++;
}
if (!isset($_SESSION['mesa'])) {
    $_SESSION['mesa'] = 1;
} else {
    $_SESSION['mesa']++;
}
if (!isset($_SESSION['escritorio'])) {
    $_SESSION['escritorio'] = 1;
} else {
    $_SESSION['escritorio']++;
}
if (!isset($_SESSION['balon'])) {
    $_SESSION['balon'] = 1;
} else {
    $_SESSION['balon']++;
}
if (!isset($_SESSION['gorra'])) {
    $_SESSION['gorra'] = 1;
} else {
    $_SESSION['gorra']++;
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Compra producto</title>
</head>

<body>
<p>Se agregó una silla al carrito.</p>
<p>Ahora hay <?php echo $_SESSION['silla'] ?> sillas. </p>
<p><a href="carrito.php">Regresar</a></p>

<p>Se agregó una mesa al carrito.</p>
<p>Ahora hay <?php echo $_SESSION['mesa'] ?> mesas. </p>
<p><a href="carrito.php">Regresar</a></p>

<p>Se agregó un escritorio al carrito.</p>
<p>Ahora hay <?php echo $_SESSION['escritorio'] ?> escritorios. </p>
<p><a href="carrito.php">Regresar</a></p>

<p>Se agregó un balon de baloncesto al carrito.</p>
<p>Ahora hay <?php echo $_SESSION['balon'] ?> balones de baloncesto. </p>
<p><a href="carrito.php">Regresar</a></p>

<p>Se agregó una gorra al carrito.</p>
<p>Ahora hay <?php echo $_SESSION['gorra'] ?> gorras. </p>
<p><a href="carrito.php">Regresar</a></p>

</body>
</html>
