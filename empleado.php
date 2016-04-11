<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include_once "persona.php";
	class Empleado extends Persona 
	{
		protected $_legajo;
		protected $_sueldo;

		function __contruct($nombre, $apellido, $dni, $sexo,$legajo,$sueldo)
		{
			parent::__construct($nombre, $apellido, $dni, $sexo);
			$_legajo=$legajo;
			$_sueldo=$sueldo;
		}	

		function getLegajo()
		{
			return $_legajo;
		}	

		function getSueldo()
		{
			return $_sueldo;
		}

		function Hablar($idioma)
		{
			return $idioma;
		}

		function ToString()
		{			
			return parent::ToString()."Legajo: ".getLegajo()."<br>"."Sueldo: ".getSueldo()."<br>";			
		}
	}
?>
</body>
</html>