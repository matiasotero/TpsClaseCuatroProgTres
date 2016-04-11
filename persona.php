<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Uno</title>
</head>
<body>
<?php
	abstract class Persona
	{
		private $_apellido;
		private $_dni;
		private $_nombre;
		private $_sexo;

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