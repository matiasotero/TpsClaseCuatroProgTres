<?php
	private $_empleados=array();
	private $_razonSocial;

	function __construct($razonSocial)
	{
		$this->razonSocial=$razonSocial;
	}

	function AgregarEmpleado()
	{
		return false;
	}
?>