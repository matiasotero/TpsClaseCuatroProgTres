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

		function __construct($nombre, $apellido, $dni, $sexo)
		{
			$_nombre=$nombre;
			$_apellido=$apellido;
			$_dni=$dni;
			$_sexo=$sexo;
		}

		function getApellido()
		{
			return $_apellido;
		}

		function getDni()
		{
			return $_dni;
		}

		function getNombre()
		{
			return $_nombre;
		}

		function getSexo()
		{
			return $_sexo;
		}

		function Hablar($idioma)
		{
			return $idioma;
		}

		function ToString()
		{
			return "Apellido: ".getApellido()."<br>"."Nombre: ".getNombre()."<br>"."Dni: ".getDni()."<br>"."Sexo: ".getSexo()."<br>";
		}
	}
?>
</body>
</html>