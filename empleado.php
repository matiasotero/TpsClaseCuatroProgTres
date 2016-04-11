<?php
	include_once "persona.php";
	class Empleado extends Persona 
	{
		protected $_legajo;
		protected $_sueldo;

		function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo)
		{
			Persona::__construct($nombre, $apellido, $dni, $sexo);
			$this->_legajo=$legajo;
			$this->_sueldo=$sueldo;
		}	

		function getLegajo()
		{
			return $this->_legajo;
		}	

		function getSueldo()
		{
			return $this->_sueldo;
		}

		function Hablar($idioma)
		{
			return $idioma;
		}

		function ToString()
		{			
			return Persona::ToString()."Legajo: ".$this->getLegajo()."-"."Sueldo: ".$this->getSueldo()."-";			
		}
	}
?>