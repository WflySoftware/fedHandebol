<?php
include_once(__APP_PATH.'/persistence/TecnicoDAO.php');
include_once(__APP_PATH.'/model/Tecnico.php');
class TecnicoController{

	private $tecnicoDAO;

	public function __construct(){
		$this->tecnicoDAO = new TecnicoDAO();
	}

	public function _listarTodos(){
		return $this->tecnicoDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->tecnicoDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->tecnicoDAO->consultarPorNome($nome);
	}
	public function _inserirTecnico(Tecnico $tecnico){
		return $this->tecnicoDAO->inserirTecnico($tecnico);
	}
	public function _atualizar(Tecnico $tecnico){
		return $this->tecnicoDAO->atualizar($tecnico);
	}
}
