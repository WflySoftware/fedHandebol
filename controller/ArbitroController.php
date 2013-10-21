<?php
include_once(__APP_PATH.'/persistence/ArbitroDAO.php');
include_once(__APP_PATH.'/model/Arbitro.php');
class ArbitroController{
	
	private $arbitroDAO;
	
	public function __construct(){
		$this->arbitroDAO = new ArbitroDAO();
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
	public function _inserir(Arbitro $arbitro){
		return $this->arbitroDAO->inserir($arbitro);
	}
	public function _atualizar(Arbitro $arbitro){
		return $this->arbitroDAO->atualizar($arbitro);
	}
	public function _salvar(Arbitro $dadosArbitro){
		$arbitro = new ArbitroDAO();
		$arbitro->__constructOverload(0,$dadosArbitro->__getNome(), $dadosArbitro->__getTelefone(), $dadosArbitro->__getCpf());
		$arbitro->salvar();
	}

}