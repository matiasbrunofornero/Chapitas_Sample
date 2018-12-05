<?php namespace DAO;

use Modelo\Cliente as Cliente;
use Config\Conexion as Conexion;

class clienteDAO extends Conexion implements IDAO{
	
	public $con;
	protected static $instance;

	private function __construct(){

	}


	public static function getInstance()
    {
        if (!isset(self::$instance)) {
            //$miclase = __CLASS__;
            self::$instance = new self;//$miclase;
        } 
        return self::$instance;
    }

    

	public function insertar($cliente) {
		try {

			$nombre		= $cliente->getNombre();
			$apellido 	= $cliente->getApellido();
			$domicilio 	= $cliente->getDomicilio();
			$dni 		= $cliente->getDni();
			$email		= $cliente->getEmail();

			$con = new Conexion();
			$conexion = $con->conectar();
			$sql = "insert into clientes values(0,:apellido, :nombre, :dni, :domicilio, :email)";

			$statement = $conexion->prepare($sql);
			$statement->bindParam(":apellido", $apellido);
			$statement->bindParam(":nombre", $nombre);
			$statement->bindParam(":dni", $dni);
			$statement->bindParam(":domicilio", $domicilio);
			$statement->bindParam(":email", $email);
			$statement->execute();

		} catch(PDOException $e) {
				echo "ERROR: " . $e->getMessage();
				
		}
		$con = null; 

	}

	public function eliminar($dni) {
		try {
		
			$con = new Conexion();
			$conexion = $con->conectar();
			$sql = "delete from clientes where DNI = :dni";

			$statement = $conexion->prepare($sql);
			$statement->bindParam(':dni', $dni);
			$statement->execute();

			
		} catch (PDOException $e) {
			echo "ERROR: " . $e->getMessage();
		}
		$con = null;

	}


	public function listar() {
		$fila = null;
		try {
			$con = new Conexion();
			$conexion = $con->conectar();
			$sql = "select * from clientes order by Apellido,Nombre asc";
			$statement = $conexion->prepare($sql);
			$statement->execute();
			$resultado = $statement->fetchAll();
		} catch (PDOException $e) {
			echo "ERROR: " . $e->getMessage();
		}
		$con = null;
		return $resultado;		
	}


	public function buscar($dni){
		try{
			$con = new Conexion();
			$conexion = $con->conectar();
			$resultado=null;
			
			$sql = "select * from clientes where dni = :dni";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':dni', $dni);
			$statement->execute();
			$resultado = $statement->fetchAll(); 
			
		} catch (PDOException $e) {
			echo "ERROR: " . $e->getMessage();
		}
		$con = null;
		return $resultado;
	
	}


}