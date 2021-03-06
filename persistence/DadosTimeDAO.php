<?php
include_once ('C:/xampp/htdocs/fedHandebol/model/Arbitro.php');
include_once ('C:/xampp/htdocs/fedHandebol/persistence/Conexao.php');
include_once ('C:/xampp/htdocs/fedHandebol/persistence/TimeDAO.php');

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
		$sql = "INSERT INTO dados_campeonato(pontos,jogos,vitorias,empates,derrotas,gols,gols_levados,time_id_time) VALUES ('{$dadosDadosTime->__getPontos()}','{$dadosDadosTime->__getJogos()}','{$dadosDadosTime->__getVitorias()}','{$dadosDadosTime->__getEmpates()}','{$dadosDadosTime->__getDerrotas()}','{$dadosDadosTime->__getGols()}','{$dadosDadosTime->__getGolsLevados()}','{$dadosDadosTime->__getIdTime()}')";
		return $this->conexao->banco->Execute($sql);
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM dados_campeonato WHERE id_dados_campeonato= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDadosTime = new DadosTime();
		$dadosDadosTime->__constructOverload($registro->ID_DADOS_CAMPEONATO,$registro->TIME_ID_TIME,$registro->PONTOS,$registro->JOGOS,$registro->VITORIAS,$registro->EMPATES,$registro->DERROTAS,$registro->GOLS,$registro->GOLS_LEVADOS);
		return $dadosDadosTime;
	}
	public function consultarPorIdTime($id){
		$sql = "SELECT * FROM dados_campeonato WHERE time_id_time= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDadosTime = new DadosTime();
		$dadosDadosTime->__constructOverload($registro->ID_DADOS_CAMPEONATO,$registro->TIME_ID_TIME,$registro->PONTOS,$registro->JOGOS,$registro->VITORIAS,$registro->EMPATES,$registro->DERROTAS,$registro->GOLS,$registro->GOLS_LEVADOS);
		return $dadosDadosTime;
	}
	public function atualizar(DadosTime $dadosDadosTime){
		$sql = "UPDATE dados_campeonato SET pontos='{$dadosDadosTime->__getPontos()}', jogos='{$dadosDadosTime->__getJogos()}', vitorias='{$dadosDadosTime->__getVitorias()}', empates='{$dadosDadosTime->__getEmpates()}', derrotas='{$dadosDadosTime->__getDerrotas()}', gols='{$dadosDadosTime->__getGols()}', gols_levados='{$dadosDadosTime->__getGolsLevados()}' WHERE time_id_time='{$dadosDadosTime->__getIdTime()}' ";
		$this->conexao->banco->Execute($sql);
	}
	public function atualizarPontos($idTimeA,$idTimeB,$pontosTimeA,$pontosTimeB,$golsTimeA,$golsTimeB){
		$timeA = new TimeDAO();
		$timeA = $this->consultarPorIdTime($idTimeA);
		$timeB = $this->consultarPorIdTime($idTimeB);
		$novoJogoA = $timeA->__getJogos()+1;
		$novoJogoB = $timeB->__getJogos()+1;
		if($golsTimeA > $golsTimeB){
			$novaVitoriaA = $timeA->__getVitorias() + 1;
			$novaDerrotaB = $timeB->__getDerrotas() + 1;
			$novoGolsA = $timeA->__getGols() + $golsTimeA;
			$novoGolsB = $timeB->__getGols() + $golsTimeB;
			$novoGolsLevadosA = $timeA->__getGolsLevados() + $golsTimeB;
			$novoGolsLevadosB = $timeB->__getGolsLevados() + $golsTimeA;
			$novoPontosA = $timeA->__getPontos() + $pontosTimeA;
			$novoPontosB = $timeB->__getPontos() + $pontosTimeB;
			$sqlA = "UPDATE dados_campeonato SET pontos='{$novoPontosA}', jogos='{$novoJogoA}', vitorias='{$novaVitoriaA}',gols='{$novoGolsA}', gols_levados='{$novoGolsLevadosA}' WHERE time_id_time='{$timeA->__getIdTime()}' ";
			$sqlB = "UPDATE dados_campeonato SET pontos='{$novoPontosB}', jogos='{$novoJogoB}', derrotas='{$novaDerrotaB}',gols='{$novoGolsB}', gols_levados='{$novoGolsLevadosB}' WHERE time_id_time='{$timeB->__getIdTime()}' ";
		}
		else if($golsTimeA < $golsTimeB){
			$novaVitoriaB = $timeB->__getVitorias() + 1;
			$novaDerrotaA = $timeA->__getDerrotas() + 1;
			$novoGolsA = $timeA->__getGols() + $golsTimeA;
			$novoGolsB = $timeB->__getGols() + $golsTimeB;
			$novoGolsLevadosA = $timeA->__getGolsLevados() + $golsTimeB;
			$novoGolsLevadosB = $timeB->__getGolsLevados() + $golsTimeA;
			$novoPontosA = $timeA->__getPontos() + $pontosTimeA;
			$novoPontosB = $timeB->__getPontos() + $pontosTimeB;
			$sqlA = "UPDATE dados_campeonato SET pontos='{$novoPontosA}', jogos='{$novoJogoA}', derrotas='{$novaDerrotaA}',gols='{$novoGolsA}', gols_levados='{$novoGolsLevadosA}' WHERE time_id_time='{$timeA->__getIdTime()}' ";
			$sqlB = "UPDATE dados_campeonato SET pontos='{$novoPontosB}', jogos='{$novoJogoB}', vitorias='{$novaVitoriaB}',gols='{$novoGolsB}', gols_levados='{$novoGolsLevadosB}' WHERE time_id_time='{$timeB->__getIdTime()}' ";
		}
		else if($golsTimeA == $golsTimeB){
			$novoEmpateA = $timeA->__getEmpates() + 1;
			$novoEmpateB = $timeB->__getEmpates() + 1;
			$novoGolsA = $timeA->__getGols() + $golsTimeA;
			$novoGolsB = $timeB->__getGols() + $golsTimeB;
			$novoGolsLevadosA = $timeA->__getGolsLevados() + $golsTimeB;
			$novoGolsLevadosB = $timeB->__getGolsLevados() + $golsTimeA;
			$novoPontosA = $timeA->__getPontos() + $pontosTimeA;
			$novoPontosB = $timeB->__getPontos() + $pontosTimeB;
			$sqlA = "UPDATE dados_campeonato SET pontos='{$novoPontosA}', jogos='{$novoJogoA}', empates='{$novoEmpateA}',gols='{$novoGolsA}', gols_levados='{$novoGolsLevadosA}' WHERE time_id_time='{$timeA->__getIdTime()}' ";
			$sqlB = "UPDATE dados_campeonato SET pontos='{$novoPontosB}', jogos='{$novoJogoB}', empates='{$novoEmpateB}',gols='{$novoGolsB}', gols_levados='{$novoGolsLevadosB}' WHERE time_id_time='{$timeB->__getIdTime()}' ";
		}
		$this->conexao->banco->Execute($sqlA);
		$this->conexao->banco->Execute($sqlB);
	}
	public function excluir($id){
		$sql = "DELETE FROM dados_campeonato WHERE id_dados_campeonato= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
}