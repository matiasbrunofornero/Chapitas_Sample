<?php namespace Config;

    class Request {
        private $controlador;
        private $metodo;
        private $parametros;

        static private $instance = null;

        public function __construct() 
        {
            $metodoRequest = $this->getMetodoRequest();

            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            
            $urlToArray = explode("/", $url);

            $ArregloUrl = array_filter($urlToArray);

            if(empty($ArregloUrl)) 
            {
                $this->controlador = 'Inicio';
            } 
            else 
            {
                $this->controlador = ucwords(array_shift($ArregloUrl));
            }

            if(empty($ArregloUrl)) 
            {
                    // Si Arreglo Url esta vacio, cargo el index por defecto
                $this->metodo = 'index';
            } 
            else 
            {
                    // Quito el primer elemento del array y lo uso como metodo
                $this->metodo = array_shift($ArregloUrl);
            }

            if($metodoRequest == 'GET')
            {
                if(!empty($ArregloUrl)) 
                $this->parametros = $ArregloUrl;
            } 
            else 
            {
                $this->parametros = $_POST;
            }
        }

        public static function getInstance() 
        {
            if (self::$instance == null) 
            {
                self::$instance = new self;//Request();
            }
        return self::$instance;
        }

        public static function getMetodoRequest()
        {
            return $_SERVER['REQUEST_METHOD'];
        }

        public function getControlador() 
        {
            return $this->controlador;
        }

        public function getMetodo() 
        {
            return $this->metodo;
        }

        public function getParametros() 
        {
            return $this->parametros;
        }
    }
?>