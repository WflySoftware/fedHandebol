<?php
include_once ('C:/xampp/htdocs/fedHandebol/model/Tempo.php');
include_once ('C:/xampp/htdocs/fedHandebol/model/Jogo.php');
include_once ('C:/xampp/htdocs/fedHandebol/persistence/Conexao.php');

class TempoDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM tempo";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTempo = new Tempo();
			$dadosTempo->__constructOverload($registro->ID_TEMPO,$registro->JOGO_ID_JOGO,$registro->TIPO,$registro->TIRO_7METROS,$registro->TEMPO_TECNICO,$registro->PLACAR_TIME1,$registro->PLACAR_TIME2);
			$retornaTempo[] = $dadosTempo;
		}
		return $retornaTempo;
	}
	
	public function inserirTempo($idJogo){
		$sql = "INSERT INTO tempo (jogo_id_jogo,tiro_7metros,tempo_tecnico,placar_time1,placar_time2,tipo) VALUES ('{$idJogo}',0,0,0,0,0)";
		$this->conexao->banco->Execute($sql);
	}
	
	public function atualizar(Tempo $dadosTempo){
		$sql = "UPDATE tempo SET jogo_id_jogo='{$dadosTempo->__getIdJogo()}',tipo='{$dadosTempo->__getTipo()}', tiro_7metros='{$dadosTempo->__getTiro7Metros()}' , tempo_tecnico='{$dadosTempo->__getTempoTecnico()}' , placar_time1='{$dadosTempo->__getplacarTime1()}' , placar_time2='{$dadosTempo->__getPlacarTime2()}'  WHERE id_tempo='{$dadosTempo->__getIdTempo()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosTempo;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM tempo WHERE id_tempo= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTempo = new Tempo();
		$dadosTempo->__constructOverload($registro->ID_TEMPO,$registro->JOGO_ID_JOGO,$registro->TIPO,$registro->TIRO_7METROS,$registro->TEMPO_TECNICO,$registro->PLACAR_TIME1,$registro->PLACAR_TIME2);
		return $dadosTempo;
	}
	
	public function consultarPorRelatorio($relatorio){
		$sql = "SELECT * FROM tempo WHERE relatorio= '{$relatorio}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTempo = new Tempo();
		$dadosTempo->__constructOverload($registro->ID_TEMPO,$registro->JOGO_ID_JOGO,$registro->TIPO,$registro->TIRO_7METROS,$registro->TEMPO_TECNICO,$registro->PLACAR_TIME1,$registro->PLACAR_TIME2);
		return $dadosTempo;
	}
	public function excluir($id){
		$sql = "DELETE FROM jogador WHERE id_jogador= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
	public function inserirGolTimeA($placarA,$seteMetros,$idTempo){
		$sql = "UPDATE tempo SET placar_time1='{$placarA}',tiro_7metros='{$seteMetros}' WHERE id_tempo='{$idTempo}'";
		$resultado = $this->conexao->banco->Execute($sql);
	}
	public function inserirGolTimeB($placarB,$idTempo){
		$sql = "UPDATE tempo SET placar_time2='{$placarB}'  WHERE id_tempo='{$idTempo}'";
		$resultado = $this->conexao->banco->Execute($sql);
	}
	public function consultarUltimoRegistro(){
		$sql = "SELECT MAX(id_tempo) AS id FROM tempo";
		$resultado = $this->conexao->banco->Execute($sql);
		return $resultado;
	}
}
