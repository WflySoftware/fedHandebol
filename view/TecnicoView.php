<?php
include_once (__APP_PATH.'/controller/TecnicoController.php');

class TecnicoView{
	private $tecnicoCO;
	public function __construct(){
		$this->tecnicoCO = new TecnicoController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->tecnicoCO->_salvar($formulario['nome'], $formulario['telefone'], $formulario['cpf']);
		echo "Dados inseridos com sucesso";
	}
	public function atualizar($id,$nome,$endereco,$telefone,$cpf){
		
	}
	public function excluir($id){
		
	}
}