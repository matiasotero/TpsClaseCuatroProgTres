<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Uno</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
	include_once "empleado.php";
	include_once "persona.php";

	$empleadoUno=new Empleado("Otero","Matias",'35394303','M','371','7413');
	echo $empleadoUno->ToString();
?>
</body>
</html>