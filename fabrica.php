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
		EliminarEmpleadosRepetidos();
		return true;
	}

	function CalcularSueldos()
	{
		$totalSueldos;
		foreach ($this->_empleados as $empleado) 
		{
			$totalSueldos+=$this->_empleados[0];
		}
		return $totalSueldos;
	}

	function EliminarEmpleado($persona)
	{
		unset($persona);
	}

	private function EliminarEmpleadosRepetidos()
	{
		array_unique($this->_empleados);
	}

	function ToString()
	{
		foreach ($this->_empleados as $empleado) 
		{
			echo $empleado->ToString();
		}
	}
?>