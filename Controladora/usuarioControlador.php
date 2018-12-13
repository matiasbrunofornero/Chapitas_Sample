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

    public function ingresarUsuario($id, $email, $password)
    {
        try
        {
            $existe = $this->usuarioDAO->buscar($email, $password);
            if(empty($existe))
            {
                $usuario = new Usuario($id, $email, $password);

                $this->usuarioDAO->insertar($usuario);

                $message = "El usuario fue cargado exitosamente";
				echo "<script type='text/javascript'>alert('$message');</script>";
                require_once ROOT."Vistas/Inicio.php";
            }
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function eliminarUsuario()
    {
        require_once ROOT."Vistas/EliminarUsuario.php";
    }

    public function eliminar($email, $password)
    {
        $existe = $this->usuarioDAO->buscar($email, $password);
        if(!empty($existe))
        {
            $this->usuarioDAO->eliminar($email);

            $message = "El usuario ha sido eliminado correctamente";
            echo "<script type='text/javascript'>alert('$message');</script>";

            require_once ROOT."Vistas/Inicio.php";
        }
        else
        {
            $message = "El usuario buscado no existe. Reintente";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->eliminarUsuario(); 
        }
    }
}



