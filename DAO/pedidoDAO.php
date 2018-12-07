<?php namespace DAO;

use Modelo\Pedido as Pedido;
use Config\Conexion as Conexion;

class pedidoDAO extends Conexion implements IDAO{

    public $con;
    protected static $instance;

    private function __construct()
    {

    }

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
            $numero = $pedido->getNumero();

            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "insert into chapitas values(:numero, :tamano, :nombre, :telefono, :cliente, :petshop)";

            $statement = $conexion->prepare($sql);
			$statement->bindParam(":tamano", $tamano);
			$statement->bindParam(":nombre", $nombre);
			$statement->bindParam(":telefono", $telefono);
			$statement->bindParam(":cliente", $cliente);
            $statement->bindParam(":petshop", $petshop);
            $statement->bindParam(":numero", $numero);
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
    
            $sql = "select * from pedidos where numero = :numero";
    
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

            $sql = "select * from chapitas order by Numero asc";

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

            $sql = "select * from pedidos where numero = :numero";

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