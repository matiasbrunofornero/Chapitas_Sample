<?php namespace Config;
	require 'Parametros.php';
	
	class Conexion {
	
		public function conectar() {
			try{
				return new \PDO("mysql:host=" . HOST . "; dbname=" . DB, USER, PASS);
			} catch(PDOException $e) {
				echo "ERROR: " . $e->getMessage();
			}
		}
	}


