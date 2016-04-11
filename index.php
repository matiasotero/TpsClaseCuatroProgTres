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
	include_once "fabrica.php";

	//creo empleados
	$empleadoUno=new Empleado("Otero","Matias",'35394303','M','371','7413');
	$empleadoDos=new Empleado("Perez","Jose",'27879789','M','123','10879001');
	$empleadoTres=new Empleado("Estebanez","Sebastian", '26897456','M','456','10800901');
	$empleadoCuatro=new Empleado("Fillol","Ubaldo",'10678301','M','145','20500301');
	//echo $empleadoUno->ToString();

	$miFabrica=new Fabrica("La Serenisima");
	$miFabrica->AgregarEmpleado($empleadoUno);
	$miFabrica->AgregarEmpleado($empleadoDos);
	$miFabrica->AgregarEmpleado($empleadoTres);
	$miFabrica->AgregarEmpleado($empleadoUno);

	echo $miFabrica->ToString()."<br>";
	echo "La suma total de sueldos es: ".$miFabrica->CalcularSueldos()."<br>"."<br>";
	//echo var_dump($miFabrica);

	$miFabrica->EliminarEmpleado($empleadoUno);

	$miFabrica->ToString();
?>
</body>
</html>