<?php namespace DAO;

use Modelo\Pedido as Pedido;
use Config\Conexion as Conexion;

class pedidoDAO extends Conexion implements IDAO{

    public $con;
    protected static $instance;

    private function __construct(){}

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function insertar($pedido)
    {
        try
        {
            $tamano = $pedido->getTamano();
            $nombre = $pedido->getNombre();
            $telefono = $pedido->getTelefono();
            $cliente = $pedido->getCliente();
            $petshop = $pedido->getPetshop();

            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "insert into chapitas values(NULL, :tamano, :nombre, :telefono, :cliente, :petshop)";

            $statement = $conexion->prepare($sql);
			$statement->bindParam(":tamano", $tamano);
			$statement->bindParam(":nombre", $nombre);
			$statement->bindParam(":telefono", $telefono);
			$statement->bindParam(":cliente", $cliente);
            $statement->bindParam(":petshop", $petshop);
			$statement->execute();
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function eliminar($numero)
    {
        try
        {
            $con = new Conexion();
            $conexion = $con->conectar();
            $resultado = null;

            $sql = "delete from chapitas where numero = :numero";
    
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':numero', $numero);
            $statement->execute();
        }
        catch (PDOException $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        $con = null;
    }

    public function listar()
    {
        $fila = null;
        try 
        {
            $con = new Conexion();
            $conexion = $con->conectar();

            $sql = "SELECT * FROM chapitas ORDER BY Numero ASC";

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

    public function buscar($numero)
    {
        try
        {
            $con = new Conexion();
            $conexion = $con->conectar();
            $resultado = null;

            $sql = "select * from chapitas where numero = :numero";

            $statement = $conexion->prepare($sql);
            $statement->bindParam(':numero', $numero);
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
}