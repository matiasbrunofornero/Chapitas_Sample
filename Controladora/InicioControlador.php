<?php namespace Controladora;

class InicioControlador 
{
        public function index() 
        {
                include_once ROOT.'Vistas/InicioIndex.php';
        }

        public function indexInicio() 
        {
                include_once ROOT.'Vistas/Inicio.php';
        }
}

?>