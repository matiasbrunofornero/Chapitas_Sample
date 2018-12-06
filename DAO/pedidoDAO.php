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

    public function insertar($pedido){

    }

    public function eliminar($pedido){
        
    }

    public function listar(){
        
    }

    public function buscar($pedido){
        
    }
}