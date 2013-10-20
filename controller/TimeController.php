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
	public function _consultarPorIdTecnico($idTecnico){
		return $this->timeDAO->consultarPorIdTecnico($idTecnico);
	}
	public function _consultarPorNome($nome){
		return $this->timeDAO->consultarPorNome($nome);
	}
	public function _consultarPorCategoria($categoria){
		return $this->timeDAO->consultarPorCategoria($categoria);
	}
	public function _consultarPorEndereco($endereco){
		return $this->timeDAO->consultarPorEndereco($endereco);
	}
	public function _consultarPorDataFundacao($dataFundacao){
		return $this->timeDAO->consultarPorDataFundacao($dataFundacao);
	}
	public function _consultarPorPresidente($presidente){
		return $this->timeDAO->consultarPorPresidente($presidente);
	}
	public function _consultarPorTelefone($telefone){
		return $this->timeDAO->consultarPorTelefone($telefone);
	}
	public function _consultarPorTempoTecnico($tempoTecnico){
		return $this->timeDAO->consultarPorTempoTecnico($tempoTecnico);
	}
	public function _inserirTime(Time $time){
		return $this->timeDAO->inserirTime($time);
	}

}
