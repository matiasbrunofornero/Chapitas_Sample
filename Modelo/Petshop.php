<?php namespace Modelo;

class Petshop
{
    private $nombre;
    private $direccion;

    public function __construct($nombre='', $direccion='', $numero='')
    {
        $this->setNombre($nombre);
        $this->setDireccion($direccion);
        $this->setNumero($numero);
    }

    #region Getters
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    #endregion
    
    #region Setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}