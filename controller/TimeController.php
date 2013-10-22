<?php
include_once(__APP_PATH.'/persistence/TimeDAO.php');
include_once(__APP_PATH.'/model/Time.php');
class TimeController{

	private $timeDAO;

	public function __construct(){
		$this->timeDAO = new TimeDAO();
	}

	public function _listarTodos(){
		return $this->timeDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->timeDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->timeDAO->consultarPorNome($nome);
	}
	public function _salvar($idTecnico,$nome,$categoria,$endereco,$dataFundacao,$presidente,$telefone){
		$dadosTime = new Time();
		$dadosTime->__constructOverload(0, $idTecnico, $nome, $categoria, $endereco, $dataFundacao, $presidente, $telefone);
		return $this->timeDAO->inserir($dadosTime);
	}
	public function _atualizar(Time $time){
		return $this->timeDAO->atualizar($time);
	}

}
