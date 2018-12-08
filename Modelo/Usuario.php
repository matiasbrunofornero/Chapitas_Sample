<?php namespace Modelos;

class Usuario
{
    private $usuarioId;
    private $email;
    private $password;

    #region Getters
    public function getId()
    {
        return $this->usuarioId;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    #endregion
    
    #region Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
}