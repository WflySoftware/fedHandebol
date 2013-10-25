<?php

include_once (__APP_PATH.'/model/Dados.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class DadosDAO{
	private $conexao;

	public function __construct(){
		$this->conexao = new Conexao();
	}
	public function listarTodos(){
		$sql = "SELECT * FROM dados";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosDados = new Dados();
			$dadosDados->__constructOverload($registro->ID_DADOS,$registro->JOGADOR_ID_JOGADOR,$registro->TEMPO_ID_TEMPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO);
			$retornaDados[] = $dadosDados;
		}
		return $retornaDados;
	}

	public function inserir(Dados $dadosDados){
		$sql = "INSERT INTO dados (jogador_id_jogador,tempo_id_tempo,advertencia,punicao,desqualificacao,relatorio) VALUES ('{$dadosDados->__getIdJogador()}','{$dadosDados->__getIdTempo()}','{$dadosDados->__getAdvertencia()}','{$dadosDados->__getPunicao()}','{$dadosDados->__getDesqualificacao()}','{$dadosDados->__getRelatorio()}')";
		$this->conexao->banco->Execute($sql);
	}

	public function atualizar(Dados $dadosDados){
		$sql = "UPDATE dados SET jogador_id_jogador='{$dadosDados->__getIdJogador()}', tempo_id_tempo='{$dadosDados->__getIdTempo()}', advertencia='{$dadosDados->__getAdvertencia()}', punicao='{$dadosDados->__getPunicao()}', desqualificacao='{$dadosDados->__getDesqualificacao()}', relatorio='{$dadosDados->__getRelatorio()}' WHERE id_dados='{$dadosDados->__getIdDados()}' ";
		$this->conexao->banco->Execute($sql);
	}

	public function consultarPorId($id){
		$sql = "SELECT * FROM dados WHERE id_dados= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDados = new Dados();
		$dadosDados->__constructOverload($registro->ID_DADOS,$registro->JOGADOR_ID_JOGADOR,$registro->TEMPO_ID_TEMPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO);
		return $dadosDados;
	}

	public function consultarPorIdJogador($idJogador){
		$sql = "SELECT * FROM dados WHERE jogador_id_jogador= '{$idJogador}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDados = new Dados();
		$dadosDados->__constructOverload($registro->ID_DADOS,$registro->JOGADOR_ID_JOGADOR,$registro->TEMPO_ID_TEMPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO);
		return $dadosDados;
	}
	public function consultarPorIdTempo($idTempo){
		$sql = "SELECT * FROM dados WHERE tempo_id_tempo= '{$idTempo}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDados = new Dados();
		$dadosDados->__constructOverload($registro->ID_DADOS,$registro->JOGADOR_ID_JOGADOR,$registro->TEMPO_ID_TEMPO,$registro->ADVERTENCIA,$registro->PUNICAO,$registro->DESQUALIFICACAO,$registro->RELATORIO);
		return $dadosDados;
	}
	public function excluir($id){
		$sql = "DELETE FROM dados WHERE id_dados= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
}
