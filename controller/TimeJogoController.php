<?php
include_once(__APP_PATH.'/persistence/TimeJogoDAO.php');
include_once(__APP_PATH.'/model/TimeJogo.php');
class TimeJogoController{

	private $timeJogoDAO;

	public function __construct(){
		$this->timeJogoDAO = new TimeJogoDAO();
	}

	public function _listarTodos(){
		return $this->timeJogoDAO->listarTodos();
	}
	public function _consultarPorTime($idTime){
		return $this->timeJogoDAO->consultarPorTime($idTime);
	}
	public function _consultarPorTempo($idTempo){
		return $this->timeJogoDAO->consultarPorTempo($idTempo);
	}
	public function _inserirTimeJogo(TimeJogo $timeJogo){
		return $this->timeJogoDAO->inserirTimeJogo($timeJogo);
	}
	public function _atualizar(TimeJogo $timeJogo){
		return $this->timeJogoDAO->atualizar($timeJogo);
	}
}
