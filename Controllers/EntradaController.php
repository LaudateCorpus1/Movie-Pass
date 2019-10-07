<?php
require "Config/Autoload.php";
use DAO\EntradaDAO as EntradaDAO;
use Models\Entrada as Entrada;

namespace Controllers;


/**
 * @author Guille
 * @version 1.0
 * @created 06-oct.-2019 19:05:37
 */
class EntradaController
{

	private $entradasDAO;

	function __construct()
	{
		$this->entradasDAO = new EntradaDAO();
	}

	public function ShowAddView()
	{
		require_once(VIEWS_PATH. "");
	}

	public function ShowListView()
	{
		$entradaList = $this->entradasDAO->getAll();

		require_once(VIEWS-PATH."");
	}

	public function Add(int $id, string $qr, int $id_Compra, int $id_Funcion)
	{
		$entrada = new Entrada($id, $qr, $id_Compra, $id_Funcion);

		$this->entradasDAO->add($entrada);

		$this->ShowAddView();
	}


}
?>