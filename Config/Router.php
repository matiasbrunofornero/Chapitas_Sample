<?php namespace Config;

    class Router {
        
        public static function direccionar(Request $request) 
        {
            $controlador = $request->getControlador();
            $controlador = strtolower($controlador);
            $controlador = $controlador  . "Controlador";

            $metodo = $request->getMetodo();
            $parametros = $request->getParametros();

            $mostrar = 'Controladora\\'. $controlador;
            $controlador = new $mostrar;  

            if(!isset($parametros)) 
            {
                call_user_func(array($controlador, $metodo));
            } 
            else 
            {
                call_user_func_array(array($controlador, $metodo), $parametros);
            } 
        }
    }
?>