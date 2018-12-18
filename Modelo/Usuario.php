<?php namespace Modelo;

class Usuario
{
    // private $usuarioId;
    private $email;
    private $password;

    public function __construct($email='', $password='', $usuarioId='')
    {
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setId($usuarioId);
    }

    #region Getters
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    public function getId()
    {
        return $this->usuarioId;
    }
    #endregion
    
    #region Setters
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}