<?php
include_once(__APP_PATH.'/persistence/JogoDAO.php');
include_once(__APP_PATH.'/model/Jogo.php');
class JogoController{

	private $jogoDAO;

	public function __construct(){
		$this->jogoDAO = new JogoDAO();
	}

	public function _listarTodos(){
		return $this->jogoDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->jogoDAO->consultarPorId($id);
	}
	public function _consultarPorDataJogo($dataJogo){
		return $this->jogoDAO->consultarPorDataJogo($dataJogo);
	}
	public function _inserirJogo(Jogo $jogo){
		return $this->jogoDAO->inserirJogo($jogo);
	}
	public function _atualizar(Jogo $jogo){
		return $this->jogoDAO->atualizar($jogo);
	}
}