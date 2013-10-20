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
	public function _consultarPorJogo($idJogo){
		return $this->tempoDAO->consultarIdJogo($idJogo);
	}
	public function _consultarPorTipo($tipo){
		return $this->tempoDAO->consultarPorTipo($tipo);
	}
	public function _consultarPorAvertencia($advertencia){
		return $this->tempoDAO->consultarPorAdvertencia($advertencia);
	}
	public function _consultarPorPunicao($punicao){
		return $this->tempoDAO->consultarPorPunicao($punicao);
	}
	public function _consultarPorDesqualificacao($desqualificacao){
		return $this->tempoDAO->consultarPorDesqualificacao($desqualificacao);
	}
	public function _consultarPorRelatorio($relatorio){
		return $this->tempoDAO->consultarPorRelatorio($relatorio);
	}
	public function _consultarPorTiro7Metros($tiro7Metros){
		return $this->tempoDAO->consultarPorTiro7Metros($tiro7Metros);
	}
	public function _consultarPorTempoTecnico($tempoTecnico){
		return $this->tempoDAO->consultarPorTempoTecnico($tempoTecnico);
	}
	public function _consultarPorPlacarTime1($placarTime1){
		return $this->tempoDAO->consultarPorPlacarTime1($placarTime1);
	}
	public function _consultarPorPlacarTime2($placarTime2){
		return $this->tempoDAO->consultarPorTime2($placarTime2);
	}
	public function _inserirTempo(Tempo $tempo){
		return $this->tempoDAO->inserirTempo($tempo);
	}
	public function _atualizar(Tempo $tempo){
		return $this->tempoDAO->atualizar($tempo);
	}

}
