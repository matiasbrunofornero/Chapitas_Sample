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
            $numero = $petshop->getId();
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

    public function eliminar($petshop){}

    public function listar()
    {
        $fila = null;
        try 
        {
            echo "<script type='text/javascript'>alert('TRY DENTRO DE LISTARPETSHOPS');</script>";
            $con = new Conexion();
            $conexion = $con->conectar();

            $sql = "select Nombre from petshops order by Nombre asc";

            $statement = $conexion->prepare($sql);
            $statement->execute();
            $resultado = $statement->fetchAll();
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        $con = null;
        return $resultado;
    }

    public function buscar($petshop){}
}