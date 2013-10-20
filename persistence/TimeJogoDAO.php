<?php
include_once (__APP_PATH.'/model/Time.php');
include_once (__APP_PATH.'/model/Jogo.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class TimeJogoDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM time_jogo";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTimeJogo = new TimeJogo();
			$dadosTimeJogo->__constructOverload($registro->TIME_ID_TIME,$registro->TEMPO_ID_TEMPO);
			$retornaTimeJogo[] = $dadosTimeJogo;
		}
		return $retornaTimeJogo;
	}
	
	public function consultarPorIdTime($idTime){
		$sql = "SELECT * FROM time_jogo WHERE time_id_time= '{$idTime}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTimeJogo = new TimeJogo();
		$dadosTimeJogo->__constructOverload($registro->TIME_ID_TIME,$registro->TEMPO_ID_TEMPO);
		return $dadosTimeJogo;
	}
	
	public function consultarPorIdTempo($idTempo){
			$sql = "SELECT * FROM time_jogo WHERE tempo_id_tempo= '{$idTempo}'";
			$resultado = $this->conexao->banco->Execute($sql);
			$registro = $resultado->FetchNextObject();
			$dadosTimeJogo = new TimeJogo();
			$dadosTimeJogo->__constructOverload($registro->TIME_ID_TIME,$registro->TEMPO_ID_TEMPO);
			return $dadosTimeJogo;
		}
}
