<?php
session_start();

if(!isset($_SESSION['usuario'])){
	echo'
	<script>
	alert("Por favor debes iniciar sesion");
	window.location = "index.php";
	</script>
	';
	session_destroy();
	die();
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenida a mi mundo</title>
</head>
<body>
<h1>Bienvenido!!</h1>
<a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>