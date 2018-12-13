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

    public function altaUsuario()
    {
        require_once ROOT."Vistas/AltaUsuario.php";
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

    public function ingresarUsuario($id, $email, $contrasena)
    {
        try
        {
            $existe = $this->usuarioDAO->buscar($email, $password);
            if(empty($existe))
            {
                $usuario = new Usuario($id, $email, $contrasena);
                $this->usuarioDAO->insertar($usuario);

                $message = "El usuario fue cargado exitosamente";
				echo "<script type='text/javascript'>alert('$message');</script>";
                // require_once ROOT."Vistas/Inicio.php";
            }
        }
        catch (PDOExcepction $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function eliminarUsuario($email, $password)
    {
    }
}



