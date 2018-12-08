<?php namespace Controladora;

use DAO\usuarioDAO as UsuarioDAO;
use Modelo\Usuario as Usuario;

class usuarioControlador
{
    private $usuarioDAO;

    public function __construct()
    {
        $this->usuarioDAO = UsuarioDAO::getInstance();
    }

    public function buscarUsuario($email, $password)
    {
        try
        {
            if($this->usuarioDAO->buscar($email, $password)!=null)
            {
                $message = "Login exitoso. Bienvenido a ChapitasPHP";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
                require_once 'Vistas/Inicio.php';
            }
            else
            {
                $message = "Datos incorrectos. Intente nuevamente";
                echo "<script type='text/javascript'>alert('$message');</script>";

                require_once 'Vistas/InicioIndex.php';
            }
        }
        catch(\Exception $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";

            require_once 'Vistas/Inicio.php';
        }
    }
}



