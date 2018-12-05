<?php namespace Controladora;

use DAO\clienteDAO as ClienteDAO;
use Modelo\Cliente as Cliente;


class clienteControlador
{
	private $clienteDAO;
	
	public function __construct()
	{
		$this->clienteDAO = ClienteDAO::getInstance();
		
	}

	public function altaCliente(){
		require_once ROOT . "Vistas/template.php";
		require_once ROOT . "Vistas/AltaCliente.php";
	}

	public function ingresarCliente($nombre,$apellido,$dni,$domicilio,$email){

		try{
			
			$existe = $this->clienteDAO->buscar($dni);
			if(empty($existe)){

				$cliente = new Cliente($apellido,$nombre,$dni,$domicilio,$email);

				$this->clienteDAO->insertar($cliente);
				
				$message = "Guardado Exitosamente!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->altaCliente();	
			}
			else{
				$message = "ya existe!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->altaCliente();
			}
			
		} 
		catch (PDOException $e){
			
			echo $e->getMessage();
		}
	}

	public function mostrarClientes(){
		$clientes = $this->clienteDAO->listar();
		require_once ROOT . "Vistas/Template.php"; //style
		require_once ROOT . "Vistas/ListaCliente.php"; //bd
	}

	public function eliminarCliente(){
		require_once ROOT . "Vistas/template.php";
		require_once ROOT . "Vistas/EliminarCliente.php";
	}	
	
	public function eliminar($dni){
	$existe = $this->clienteDAO->buscar($dni);
	if(!empty($existe)){
		$this->clienteDAO->eliminar($dni);
		$message = "Eliminado Exitosamente!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$this->eliminarCliente();	
	}else{
		$message = "No existe Cliente!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$this->eliminarCliente();
	}	
	}
}
?>