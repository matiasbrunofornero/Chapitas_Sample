<?php namespace DAO;

use Modelo\Petshop as Petshop;
use Config\Conexion as Conexion;

class petshopDAO extends Conexion implements IDAO
{
    public $con;
    protected static $instance;

    private function __construct(){}

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function insertar($petshop)
    {
        try
        {
            $numero = $petshop->getNumero();
            $nombre = $petshop->getNombre();
            $direccion = $petshop->getDireccion();
        
            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "insert into petshops values(:numero, :nombre, :direccion)";
        
            $statement = $conexion->prepare($sql);
			$statement->bindParam(":numero", $numero);
			$statement->bindParam(":nombre", $nombre);
			$statement->bindParam(":direccion", $direccion);

			$statement->execute();
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function eliminar($petshop)
    {
    }

    public function listar()
    {
    }

    public function buscar($petshop)
    {
    }
}