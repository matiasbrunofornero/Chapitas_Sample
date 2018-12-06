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
            echo "<script type='text/javascript'>alert('Buscando Pedido');</script>";
            $existe = $this->pedidoDAO->buscar($numero);
            if(!empty($existe))
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
        require_once ROOT."Vistas/ListaPedido.php";
    }

    public function eliminarPedido()
    {
        require_once ROOT."Vistas/EliminarPedido.php";
    }

    public function eliminar($numero)
    {
        $existe = $this->pedidoDAO->buscar($numero);
        if(!empty($existe))
        {
            $this->pedidoDAO->eliminar($numero);

            $message = "El pedido ha sido eliminado correctamente";
            echo "<script type='text/javascript'>alert('$message');</script>";

            $this->eliminarPedido();	
        }
        else
        {
            $message = "El pedido buscado no existe";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->altaPedido();
        }
    }
}
?>