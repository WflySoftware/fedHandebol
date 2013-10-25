<?php
include_once (__APP_PATH.'/model/Tempo.php');
include_once (__APP_PATH.'/model/Jogo.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

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
			$dadosTempo->__constructOverload($registro->ID_TEMPO,$registro->JOGO_ID_JOGO,$registro->TIPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO,$registro->TIRO_7METROS,$registro->TEMPO_TECNICO,$registro->PLACAR_TIME1,$registro->PLACAR_TIME2);
			$retornaTempo[] = $dadosTempo;
		}
		return $retornaTempo;
	}
	
	public function inserir(Tempo $dadosTempo){
		$sql = "INSERT INTO tempo (jogo_id_jogo,tipo,advertencia,punicao,desqualificacao,relatorio,tiro_7metros,tempo_tecnico,placar_time1,placar_time2) VALUES ('{$dadosTempo->__getIdJogo()}','{$dadosTempo->__getTipo()}','{$dadosTempo->__getAdvertencia()}','{$dadosTempo->__getPunicao()}','{$dadosTempo->__getDesqualificacao()}','{$dadosTempo->__getRelatorio()}','{$dadosTempo->__getTiro7Metros()}','{$dadosTempo->__getTempoTecnico()}','{$dadosTempo->__getplacarTime1()}','{$dadosTempo->__getPlacarTime2()}')";
		$this->conexao->banco->Execute($sql);
	}
	
	public function atualizar(Tempo $dadosTempo){
		$sql = "UPDATE tempo SET jogo_id_jogo='{$dadosTempo->__getIdJogo()}',tipo='{$dadosTempo->__getTipo()}', advertencia='{$dadosTempo->__getAdvertencia()}', punicao='{$dadosTempo->__getPunicao()}', desqualificacao='{$dadosTempo->__getDesqualificacao()}' , relatorio='{$dadosTempo->__getRelatorio()}' , tiro_7metros='{$dadosTempo->__getTiro7Metros()}' , tempo_tecnico='{$dadosTempo->__getTempoTecnico()}' , placar_time1='{$dadosTempo->__getplacarTime1()}' , placar_time2='{$dadosTempo->__getPlacarTime2()}'  WHERE id_tempo='{$dadosTempo->__getIdTempo()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosTempo;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM tempo WHERE id_tempo= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTempo = new Tempo();
		$dadosTempo->__constructOverload($registro->ID_TEMPO,$registro->JOGO_ID_JOGO,$registro->TIPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO,$registro->TIRO_7METROS,$registro->TEMPO_TECNICO,$registro->PLACAR_TIME1,$registro->PLACAR_TIME2);
		return $dadosTempo;
	}
	
	public function consultarPorRelatorio($relatorio){
		$sql = "SELECT * FROM tempo WHERE relatorio= '{$relatorio}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTempo = new Tempo();
		$dadosTempo->__constructOverload($registro->ID_TEMPO,$registro->JOGO_ID_JOGO,$registro->TIPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO,$registro->TIRO_7METROS,$registro->TEMPO_TECNICO,$registro->PLACAR_TIME1,$registro->PLACAR_TIME2);
		return $dadosTempo;
	}
	public function excluir($id){
		$sql = "DELETE FROM jogador WHERE id_jogador= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
}
