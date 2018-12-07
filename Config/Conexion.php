<?php namespace Config; require 'Parametros.php';
	
	class Conexion 
	{
		public function conectar() 
		{
			try
			{
				return new \PDO("mysql:host=" . HOST . "; dbname=" . DB, USER, PASS);
			} 
			catch(PDOException $e) 
			{
				$message = $e->getMessage();
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
	}