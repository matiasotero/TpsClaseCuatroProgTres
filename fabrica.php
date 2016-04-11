<?php
	class Fabrica
	{
		private $_empleados;
		private $_razonSocial;
		private $_resultadoArrayEmpleados;

		function __construct($razonSocial)
		{
			$this->_razonSocial=$razonSocial;
			$this->_empleados=array();
			$this->_resultadoArrayEmpleados=array();
		}

		function AgregarEmpleado($empleado)
		{
			array_push($this->_empleados, $empleado);
			$this->EliminarEmpleadosRepetidos();
			return true;
		}

		function CalcularSueldos()
		{
			$totalSueldos=0;
			foreach ($this->_empleados as $empleado) 
			{
				$totalSueldos+=$empleado->getSueldo();
			}
			return $totalSueldos;
		}

		function EliminarEmpleado($persona)
		{
			$contador=0;
			foreach ($this->_empleados as $empleado) 
			{
				if($empleado==$persona)
				{
					unset($this->_empleados[$contador]);
					break;
				}
				$contador++;
			}
		}

		private function EliminarEmpleadosRepetidos()
		{
			//$this->$_empleados = array_unique(implode($this->_empleados->ToString()));
			//foreach ($this->_empleados as $empleado) 
			//{
			//	array_push($this->_resultadoArrayEmpleados, $empleado->ToString());
			//}
			//$this->_empleados = array_unique($this->_resultadoArrayEmpleados);
		}

		function ToString()
		{
			echo "Empresa: ".$this->_razonSocial."<br>"."=================="."<br>";
			foreach ($this->_empleados as $empleado) 
			{
				echo $empleado->ToString()."<br>";
			}
			//echo "<br>"."Resultado Array empleados: ".var_dump($this->_resultadoArrayEmpleados)."<br>";
			//echo count($this->_empleados);
			//echo $this->_empleados[1]->ToString();
		}
}
?>