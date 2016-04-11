<?php
	abstract class Persona
	{
		private $_apellido;
		private $_dni;
		private $_nombre;
		private $_sexo;

		function __construct($nombre, $apellido, $dni, $sexo)
		{
			$this->_nombre=$nombre;
			$this->_apellido=$apellido;
			$this->_dni=$dni;
			$this->_sexo=$sexo;
		}

		function getApellido()
		{
			return $this->_apellido;
		}

		function getDni()
		{
			return $this->_dni;
		}

		function getNombre()
		{
			return $this->_nombre;
		}

		function getSexo()
		{
			return $this->_sexo;
		}

		function Hablar($idioma)
		{
			return $idioma;
		}

		function ToString()
		{
			return "Apellido: ".$this->getApellido()."<br>"."Nombre: ".$this->getNombre()."<br>"."Dni: ".$this->getDni()."<br>"."Sexo: ".$this->getSexo()."<br>";
		}
	}
?>