<?php namespace Controladora;

use DAO\pedidoDAO as PedidoDAO;
use DAO\petshopDAO as PetshopDAO;
use Modelo\Pedido as Pedido;

class pedidoControlador
{
    private $pedidoDAO;
    private $petshopDAO;

    public function __construct()
	{
        $this->pedidoDAO = PedidoDAO::getInstance();
        $this->petshopDAO = PetshopDAO::getInstance();
    }
    
    public function altaPedido()
    {
        $petshops = $this->petshopDAO->listar();
        require_once ROOT."Vistas/AltaPedido.php";
    }

    public function ingresarPedido($tamano, $nombre, $telefono, $cliente, $petshop)
    {
        try
        {
            $existe = $this->pedidoDAO->buscar($nombre);

            if(empty($existe))
            {
                $pedido = new Pedido($tamano, $nombre, $telefono, $cliente, $petshop);

                $this->pedidoDAO->insertar($pedido);

                $message = "El pedido fue cargado exitosamente";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->mostrarPedidos();	
            }
            else
            {
                $message = "El pedido ya fue cargado anteriormente. Reintentar";
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
            echo "<script type='text/javascript'>alert('Intentando eliminar pedido $numero');</script>";
            $this->pedidoDAO->eliminar($numero);

            $message = "El pedido ha sido eliminado correctamente";
            echo "<script type='text/javascript'>alert('$message');</script>";

            $this->mostrarPedidos();	
        }
        else
        {
            $message = "El pedido buscado no existe. Reintente";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->eliminarPedido();
        }
    }
}
?>