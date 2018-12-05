<?php namespace Controladora;

use DAO\pedidoDAO as PedidoDAO;
use Modelo\Pedido as Pedido;

class pedidoControlador
{
    private $pedidoDAO;

    public function __construct()
	{
        $this->pedidoDAO = PedidoDAO::getInstance();
        // $this->clienteDAO = ClienteDAO::getInstance();
    }
    
    public function altaPedido()
    {
        require_once ROOT."Vistas/AltaPedido.php";
    }

    public function ingresarPedido(){
    }

    public function mostrarPedido(){
    }

    public function eliminarPedido(){
    }

    public function eliminar($numero){
    }
}