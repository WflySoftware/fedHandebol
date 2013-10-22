<?php
include_once(__APP_PATH.'/controller/JogadorController.php');

class JogadorView{
	private $jogadoroCO;
	
	public function __construct(){
		$this->jogadorCO = new JogadorController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->jogadorCO->_salvar($formulario['nome'], $formulario['time'], $formulario['data_nascimento'],$formulario['cpf'],$formulario['numero']);
		echo "Dados inseridos com sucesso";
	}
}
