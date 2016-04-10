<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Uno</title>
</head>
<body>
<?php
	abstract class Persona
	{
		$_apellido;
		$_dni;
		$_nombre;
		$_sexo;

		function __construct($nombre, $apellido, $dni, $sexo);

		function getApellido();

		function getDni();

		function getNombre();

		function getSexo();

		function Hablar($idioma);

		function ToString();
	}
?>
</body>
</html>