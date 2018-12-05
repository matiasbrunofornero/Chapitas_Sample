<?php namespace Modelo;


class Cliente 
{
	private $clienteId;
	private $apellido;
	private $nombre;
	private $dni;
	private $domicilio;
	private $email;

	public function __construct($apellido='',$nombre='',$dni='',$domicilio='',$email='')
	{
		$this->setApellido($apellido);
		$this->setNombre($nombre);
		$this->setDni($dni);
		$this->setDomicilio($domicilio);
		$this->setEmail($email);
	}


	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	
	public function getDomicilio()
	{
		return $this->domicilio;
	}

	public function setDomicilio($domicilio)
	{
		$this->domicilio= $domicilio;
	}

	public function getDni()
	{
		return $this->dni;
	}

	public function setDni($dni)
	{
		$this->dni = $dni;
	}


	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}


	public function geidCliente()
	{
		return $this->idCliente;
	}

	public function setidCliente($idCliente)
	{
		$this->idCliente= $idCliente;
	}


}