<?php namespace DAO;

use Modelo\Usuario as Usuario;
use Config\Conexion as Conexion;

class usuarioDAO extends Conexion
{
    public $con;
    protected static $instance;

    private function __construct(){
    }

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function insertar($usuario)
    {
        try
        {
            $id = $usuario->getId();
            $email = $usuario->getEmail();
            $password = $usuario->getPassword();

            $con = new Conexion();
            $conexion = $con->conectar();

            $sql = "insert into usuarios values(:id, :email, :password)";

            $statement = $conexion->prepare($sql);
			$statement->bindParam(":id", $id);
			$statement->bindParam(":email", $email);
			$statement->bindParam(":password", $password);

            $statement->execute();
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function eliminar($email)
    {
        try
        {
            $con = new Conexion();
            $conexion = $con->conectar();
            $resultado = null;

            $sql = "delete from usuarios where email = :email";
    
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':email', $email);
            $statement->execute();
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        $con = null;
    }

    public function buscar($email, $password)
    {
        $row = null;
        try
        {
            $con = new Conexion();
            $conexion = $con->conectar();

            $sql = "SELECT * FROM usuarios WHERE (email, password) = (:email, :password)";

            $statement = $conexion->prepare($sql);

            $statement->bindParam(':email', $email);
            $statement->bindParam(':password', $password);
            $statement->execute();
			$row = $statement->fetch();

            if(empty($row)) return null;
			return $row;
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";

            require_once('Vistas/InicioIndex.php');
        }
    }
}