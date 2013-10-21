<?php
include_once (__APP_PATH.'/model/Tecnico.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class TecnicoDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM tecnico";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTecnico = new Tecnico();
			$dadosTecnico->__constructOverload($registro->ID_TECNICO,$registro->NOME,$registro->ENDERECO,$registro->TELEFONE,$registro->CPF);
			$retornaTecnico[] = $dadosTecnico;
		}
		return $retornaTecnico;
	}
	
	public function inserir(Tecnico $dadosTecnico){
		$sql = "INSERT INTO tecnico (nome,endereco,telefone,cpf) VALUES ('{$dadosTecnico->__getNome()}','{$dadosTecnico->__getEndereco()}','{$dadosTecnico->__getTelefone()}','{$dadosTecnico->__getCpf()}')";
		$this->conexao->banco->Execute($sql);
	}
	
	public function atualizar(Tecnico $dadosTecnico){
		$sql = "UPDATE tecnico SET nome='{$dadosTecnico->__getNome()}',endereco='{$dadosTecnico->__getEndereco()}', telefone='{$dadosTecnico->__getTelefone()}', cpf='{$dadosTecnico->__getCpf()}' WHERE id_tecnico='{$dadosTecnico->__getIdTecnico()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosTecnico;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM tecnico WHERE id_tecnico= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTecnico = new Tecnico();
		$dadosTecnico->__constructOverload($registro->ID_TECNICO,$registro->NOME,$registro->ENDERECO,$registro->TELEFONE,$registro->CPF);
		return $dadosTecnico;
	}
	
	public function consultarPorNome($nome){
		$sql = "SELECT * FROM tecnico WHERE nome= '{$nome}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTecnico = new Tecnico();
		$dadosTecnico->__constructOverload($registro->ID_TECNICO,$registro->NOME,$registro->ENDERECO,$registro->TELEFONE,$registro->CPF);
		return $dadosTecnico;
	}
}