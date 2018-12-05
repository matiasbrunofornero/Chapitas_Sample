<?php namespace DAO;


Interface IDAO 
{
	public function insertar($dato);

	public function eliminar($dato);

	public function listar();

	public function buscar($dato);

}