<?php
require "Config/Autoload.php";
use DAO\CompraDAO as CompraDAO;
use Models\Compra as Compra;

namespace Controllers;


/**
 * @author Guille
 * @version 1.0
 * @created 06-oct.-2019 19:05:37
 */
class CompraController
{

	private $compraDAO;

	function __construct()
	{
		$this->compraDAO = new CompraDAO();
	}

	public function ShowAddView()
	{
		require_once(VIEWS_PATH. "");
	}

	public function ShowListView()
	{
		$compraList = $this->compraDAO->getAll();

		require_once(VIEWS-PATH."");
	}


	public function Add(int $id, date $fecha, int $cantEntradas, int $descuento, float $total, Usuario $usuario)
	{
		$compra = new Compra($id,$fecha,$cantEntradas,$descuento,$total,$usuario);

		$this->compraDAO->add($compra);

		$this->ShowAddView();
	}

}
?>