<?php namespace Controladora;

use DAO\petshopDAO as PetshopDAO;
use Modelo\Petshop as Petshop;

class petshopControlador
{
    private $petshopDAO;

    public function __construct()
    {
        $this->petshopDAO = PetshopDAO::getInstance();
    }

    public function altaPetshop()
    {
        require_once ROOT."Vistas/AltaPetshop.php";
    }

    public function ingresarPetshop($numero, $nombre, $direccion)
    {
        try
        {
            $existe = $this->petshopDAO->buscar($numero);
            if(empty($existe))
            {
                $petshop = new Petshop($numero, $nombre, $direccion);
                $this->petshopDAO->insertar($petshop);

                $message = "El petshop fue cargado exitosamente";
				echo "<script type='text/javascript'>alert('$message');</script>";
                require_once ROOT."Vistas/Inicio.php";
            }
        }
        catch (PDOExcepction $e)
        {
            $message = $e->getMessage();
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    public function eliminarPetshop()
    {
        require_once ROOT."Vistas/EliminarPetshop.php";
    }

    public function eliminar($nombre)
    {
        $existe = $this->petshopDAO->buscar($nombre);
        if(!empty($existe))
        {
            $this->petshopDAO->eliminar($nombre);

            $message = "El petshop ha sido eliminado correctamente";
            echo "<script type='text/javascript'>alert('$message');</script>";

            require_once ROOT."Vistas/Inicio.php";
        }
        else
        {
            $message = "El petshop buscado no existe. Reintente";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $this->eliminarPetshop(); 
        }
    }
}
?>