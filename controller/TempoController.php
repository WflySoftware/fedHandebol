<?php
include_once(__APP_PATH.'/persistence/TempoDAO.php');
include_once(__APP_PATH.'/model/Tempo.php');
class TempoController{

	private $tempoDAO;

	public function __construct(){
		$this->tempoDAO = new TempoDAO();
	}

	public function _listarTodos(){
		return $this->tempoDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->tempoDAO->consultarPorId($id);
	}
	public function _consultarPorRelatorio($relatorio){
		return $this->tempoDAO->consultarPorRelatorio($relatorio);
	}
	public function _inserirTempo(Tempo $tempo){
		return $this->tempoDAO->inserirTempo($tempo);
	}
	public function _atualizar(Tempo $tempo){
		return $this->tempoDAO->atualizar($tempo);
	}

}
