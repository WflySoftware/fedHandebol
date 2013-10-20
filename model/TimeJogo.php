<?php
class TimeJogo{
	private $idTime;
	private $idTempo;
	
	public function __construct(){
	
	}
	public function __constructOverload($idTime,$idTempo){
		$this->idTime = $idTtime;
		$this->idTempo = $idTempo;
	}
	public function __getIdTime(){
		return $this->idTime;
	}
	public function __setIdTime($idTime){
		$this->idTime = $idTime;
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIdTempo($idTempo){
		$this->idTempo = $idTempo;
	}
	
}