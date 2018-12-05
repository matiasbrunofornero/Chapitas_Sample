<?php namespace Modelo;

class Pedido 
{
    private $tamano;
    private $nombre;
    private $telefono;
    private $cliente;
    private $petshop;

    public function __construct($tamano='', $nombre='', $telefono='', $cliente='', $petshop='', $numero='')
    {
        $this->setTamano($tamano);
        $this->setNombre($nombre);
        $this->setTelefono($telefono);
        $this->setCliente($cliente);
        $this->setPetshop($petshop);
        $this->setNumero($numero);
    }

    #region Getters
    public function getTamano()
    {
        return $this->tamano;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getPetshop()
    {
        return $this->petshop;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    #endregion

    #region Setters
    public function setTamano($tamano)
    {
        $this->tamano = $tamano;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function setPetshop($petshop)
    {
        $this->petshop = $petshop;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    #endregion

}

