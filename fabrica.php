<?php
	private $_empleados;
	private $_razonSocial;

	function __construct($razonSocial)
	{
		$this->_razonSocial=$razonSocial;
		$this->_empleados=array();
	}

	function AgregarEmpleado($empleado)
	{
		array_push($this->_empleados, $empleado);
		return true;
	}

	function CalcularSueldos()
	{

	}

	function EliminarEmpleado($persona)
	{

	}

	private function ElimiarEmpleadosRepetidos()
	{

	}

	function ToString()
	{

	}
?>