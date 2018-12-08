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

    public function buscar($email, $password)
    {
        $row = null;
        try
        {
            $con = new Conexion();
            $conexion = $con->conectar();

            $sql = "SELECT * FROM usuarios WHERE (email, password) = (:email, :password)";

            $statement = $conexion->prepare($sql);

            $statement->bindParam(':Email', $Email);
            $statement->bindParam(':Password', $Password);
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