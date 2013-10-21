<?php
include_once (__APP_PATH.'/model/Time.php');
include_once (__APP_PATH.'/model/Tecnico.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class TimeDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM time";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTime = new Time();
			$dadosTime->__constructOverload($registro->ID_TIME,$registro->TECNICO_ID_TECNICO,$registro->NOME,$registro->CATEGORIA,$registro->ENDERECO,$registro->DATA_FUNDACAO,$registro->PRESIDENTE,$registro->TELEFONE);
			$retornaTime[] = $dadosTime;
		}
		return $retornaTime;
	}
	
	public function inserir(Time $dadosTime){
		$sql = "INSERT INTO time (tecnico_id_tecnico,nome,categoria,endereco,data_fundacao,presidente,telefones) VALUES ('{$dadosTime->__getIdTecnico()}','{$dadosTime->__getNome()}','{$dadosTime->__getCategoria()}','{$dadosTime->__getEndereco()}','{$dadosTime->__getDataFundacao()}','{$dadosTime->__getPresidente()}','{$dadosTime->__getTelefone()}')";
		$this->conexao->banco->Execute($sql);
	}
	
	public function atualizar(Time $dadosTime){
		$sql = "UPDATE time SET tecnico_id_tecnico='{$dadosTime->__getIdTecnico()}',nome='{$dadosTime->__getNome()}', categoria='{$dadosTime->__getCategoria()}', endereco='{$dadosTime->__getEndereco()}', data_fundacao='{$dadosTime->__getDataFundacao()}', presidente='{$dadosTime->__getPresidente()}', telefone='{$dadosTime->__getTelefone()}' WHERE id_time='{$dadosTime->__getIdTime()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosTime;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM time WHERE id_time= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTime = new Time();
		$dadosTime->__constructOverload($registro->ID_TIME,$registro->TECNICO_ID_TECNICO,$registro->NOME,$registro->CATEGORIA,$registro->ENDERECO,$registro->DATA_FUNDACAO,$registro->PRESIDENTE,$registro->TELEFONE);
		return $dadosTime;
	}
	
	public function consultarPorNome($nome){
		$sql = "SELECT * FROM time WHERE nome= '{$nome}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTime = new Time();
		$dadosTime->__constructOverload($registro->ID_TIME,$registro->TECNICO_ID_TECNICO,$registro->NOME,$registro->CATEGORIA,$registro->ENDERECO,$registro->DATA_FUNDACAO,$registro->PRESIDENTE,$registro->TELEFONE);
		return $dadosTime;
	}
}