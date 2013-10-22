<?php
include_once(__APP_PATH.'/controller/ArbitroController.php');

class ArbitroView{
	private $arbitroCO;
	public function __construct(){
		$this->arbitroCO = new ArbitroController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->arbitroCO->_salvar($formulario['nome'], $formulario['telefone'], $formulario['cpf']);
		echo "Dados inseridos com sucesso";
	}
	public function atualizar($nome,$telefone,$cpf){
		return $this->arbitroCO->_atualizar($arbitro);
	}
	public function excluir($id){
		return $this->arbitroCO->_excluir($id);
	}
	public function listarArbitrosParaTabela(){
		return $this->arbitroCO->_listarArbitrosParaTabela();
	}
}