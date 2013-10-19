<?php
include_once(__APP_PATH.'/fedHandebol/persistence/ArbitroDAO.php');
include_once(__APP_PATH.'/model/Arbitro.php');
class ArbitroController{
	
	private $arbitroDAO;
	
	public function __construct(){
		$this->arbitroDAO = new arbitroDAO();
	}
	
	public function _listarTodos(){
		return $this->arbitroDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->arbitroDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->arbitroDAO->consultarPorNome($nome);
	}
	public function _consultarPorTelefone($telefone){
		return $this->arbitroDAO->consultarPorTelefone($telefone);
	}
	public function _consultarPorCpf($cpf){
		return $this->arbitroDAO->consultarPorCpf($cpf);
	}
	public function _inserirArbitro(Arbitro $arbitro){
		return $this->arbitroDAO->inserirArbitro($arbitro);
	}

}