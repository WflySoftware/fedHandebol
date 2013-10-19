<?php
include_once (__APP_PATH.'/model/Jogador.php');
include_once (__APP_PATH.'/model/Time.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class JogadorDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM jogador";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosJogador = new Jogador();
			$dadosJogador->__constructOverload($registro->ID_JOGADOR,$registro->TIME_ID_TIME,$registro->NOME,$registro->DATA_NASCIMENTO,$registro->CPF,$registro->NUMERO);
			$retornaJogadors[] = $dadosJogador;
		}
		return $retornaJogadors;
	}
	
	public function inserir(Jogador $dadosJogador){
		$sql = "INSERT INTO jogador (time_id_time,nome,data_nascimento,cpf,numero) VALUES ('{$dadosJogador->__getIdTime()}','{$dadosJogador->__getDataNascimento()}','{$dadosJogador->__getCpf()}','{$dadosJogador->__getNumero()}')";
		$this->conexao->banco->Execute($sql);
	}
	
	public function atualizar(Jogador $dadosJogador){
		$sql = "UPDATE jogador SET time_id_time='{$dadosJogador->__getIdTime()}',nome='{$dadosJogador->__getNome()}', data_nascimento='{$dadosJogador->__getDataNascimento()}', cpf='{$dadosJogador->__getCpf()}', numero='{$dadosJogador->__getNumero()}' WHERE id_jogador='{$dadosJogador->__getIdJogador()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosJogador;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM jogador WHERE id_jogador= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload($registro->ID_JOGADOR,$registro->TIME_ID_TIME,$registro->NOME,$registro->DATA_NASCIMENTO,$registro->CPF,$registro->NUMERO);
		return $dadosJogador;
	}
	
	public function consultarPorNome($nome){
		$sql = "SELECT * FROM jogador WHERE nome= '{$nome}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload($registro->ID_JOGADOR,$registro->TIME_ID_TIME,$registro->NOME,$registro->DATA_NASCIMENTO,$registro->CPF,$registro->NUMERO);
		return $dadosJogador;
	}
	public function consultarPorTime(Time $dadosTime){
		$sql = "SELECT * FROM jogador WHERE time_id_time= '{$dadosTime->__getIdTime()}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload($registro->ID_JOGADOR,$registro->TIME_ID_TIME,$registro->NOME,$registro->DATA_NASCIMENTO,$registro->CPF,$registro->NUMERO);
		return $dadosJogador;
	}
}
