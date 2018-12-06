<?php namespace Controladora;

use DAO\pedidoDAO as PedidoDAO;
use Modelo\Pedido as Pedido;

class pedidoControlador
{
    private $pedidoDAO;

    public function __construct()
	{
        $this->pedidoDAO = PedidoDAO::getInstance();
    }
    
    public function altaPedido()
    {
        require_once ROOT."Vistas/AltaPedido.php";
    }

    public function ingresarPedido($tamano, $nombre, $telefono, $cliente, $petshop, $numero)
    {
        try
        {
            $existe = $this->pedidoDAO->buscar($pedido);
            if(empty($existe))
            {
                $pedido = new Pedido($tamano, $nombre, $telefono, $cliente, $petshop, $numero);
                $this->pedidoDAO->insertar($pedido);

                $message = "El pedido fue cargado exitosamente";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->altaPedido();	
            }
            else
            {
                $message = "El pedido ya fue cargado anteriormente";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->altaPedido();
            }
        }
        catch (PDOExcepction $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function mostrarPedidos()
    {
        $pedidos = $this->pedidoDAO->listar();
        echo "<script type='text/javascript'>alert('Welcome to mostrarPedidos');</script>";

    }

    public function eliminarPedido(){
    }

    public function eliminar($numero){
    }
}