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
	public function _consultarPorIdTime($idTime){
		return $this->timeJogoDAO->consultarPorIdTime($idTime);
	}
	public function _consultarPorIdTempo($idTempo){
		return $this->timeJogoDAO->consultarPorIdTempo($idTempo);
	}
	public function _inserirTimeJogo(TimeJogo $timeJogo){
		return $this->timeJogoDAO->inserirTimeJogo($timeJogo);
	}
}
