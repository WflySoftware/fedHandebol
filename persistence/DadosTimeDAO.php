<?php
include_once (__APP_PATH.'/model/Arbitro.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class DadosTimeDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	public function listarTodos(){
		$sql = "SELECT * FROM dados_campeonato";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosDadosTime = new DadosTime();
			$dadosDadosTime->__constructOverload($registro->ID_DADOS_CAMPEONATO,$registro->TIME_ID_TIME,$registro->PONTOS,$registro->JOGOS,$registro->VITORIAS,$registro->EMPATES,$registro->DERROTAS,$registro->GOLS,$registro->GOLS_LEVADOS);
			$retornaDadosTime[] = $dadosDadosTime;
		}
		return $retornaDadosTime;
	}
	public function inserir(DadosTime $dadosDadosTime){
		$sql = "INSERT INTO dados_campeonato(pontos,jogos,vitorias,empates,derrotas,gols,gols_levados) VALUES ('{$dadosDadosTime->__getPontos()}','{$dadosDadosTime->__getJogos()}','{$dadosDadosTime->__getVitorias()}','{$dadosDadosTime->__getEmpates()}','{$dadosDadosTime->__getDerrotas()}','{$dadosDadosTime->__getGols()}','{$dadosDadosTime->__getGolsLevados()}')";
		$this->conexao->banco->Execute($sql);
		
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM dados_campeonato WHERE id_dados_campeonato= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDadosTime = new DadosTime();
		$dadosDadosTime->__constructOverload($registro->ID_DADOS_CAMPEONATO,$registro->TIME_ID_TIME,$registro->PONTOS,$registro->JOGOS,$registro->VITORIAS,$registro->EMPATES,$registro->DERROTAS,$registro->GOLS,$registro->GOLS_LEVADOS);
		return $dadosDadosTime;
	}
	public function atualizar(DadosTime $dadosDadosTime){
		$sql = "UPDATE dados_campeonato SET pontos='{$dadosDadosTime->__getPontos()}', jogos='{$dadosDadosTime->__getJogos()}', vitorias='{$dadosDadosTime->__getVitorias()}', empates='{$dadosDadosTime->__getEmpates()}', derrotas='{$dadosDadosTime->__getDerrotas()}', gols='{$dadosDadosTime->__getGols()}', gols_levados='{$dadosDadosTime->__getGolsLevados()}' WHERE id_dados_campeonato='{$dadosDadosTime->__getIdDadosTime()}' ";
		$this->conexao->banco->Execute($sql);
	}
	public function excluir($id){
		$sql = "DELETE FROM dados_campeonato WHERE id_dados_campeonato= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
}