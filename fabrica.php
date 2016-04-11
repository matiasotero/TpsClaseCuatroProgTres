<?php
	class Fabrica
	{
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
			$this->EliminarEmpleadosRepetidos();
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
			$this->_empleados = array_unique($this->_empleados[0]);
		}

		function ToString()
		{
			echo "Empresa: ".$this->_razonSocial."<br>"."==================";
			foreach ($this->_empleados as $empleado) 
			{
				echo "<br>".$empleado->ToString()."------------------------------";
			}
		}
}
?>