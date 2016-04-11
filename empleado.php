<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	protected $_legajo;
	protected $_sueldo;

	function __contruct($nombre, $apellido, $dni, $sexo,$legajo,$sueldo)
	{
		//parent::__construct($nombre, $apellido, $dni, $sexo);
		$_legajo=$legajo;
		$_sueldo=$sueldo;
	}		

?>
</body>
</html>