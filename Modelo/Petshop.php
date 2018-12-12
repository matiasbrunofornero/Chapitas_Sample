<?php namespace Modelo;

class Petshop
{
    private $petshopId;
    private $nombre;
    private $direccion;

    public function __construct($petshopId='', $nombre='', $direccion='')
    {
        $this->setId($petshopId);
        $this->setNombre($nombre);
        $this->setDireccion($direccion);
    }

    #region Getters
    public function getId()
    {
        return $this->petshopId;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getDireccion()
    {
        return $this->direccion;
    }
    #endregion
    
    #region Setters
    public function setId($petshopId)
    {
        $this->petshopId = $petshopId;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
}