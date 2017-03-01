<?php

class Perro
{
	// Propiedades de la clase Perro
	public $nombre;
	public $raza;

	//Metodo constructor
	function __construct($nombre,$raza)
	{
		$this->nombre = $nombre;
		$this->raza = $raza;
	}

	// Funciones de la clase Perro
	function ladrar()
	{
		return $this->nombre." ladra Wua wua";
	}

	function getRaza()
	{
		return $this->raza;
	}

}

// Creamos instancias de la clase Perro
$blaki = new Perro('Blaki','Pastor Aleman');

$firulais = new Perro('Firulais','Bull Terry');
// Hacer uso de las funciones de la clase Perro
echo "{$blaki->ladrar()}";
echo "<br>";
echo "{$firulais->ladrar()}";
