<?php
include_once(__APP_PATH.'/controller/JogadorController.php');
include_once(__APP_PATH.'/controller/TimeController.php');

class JogadorView{
	private $jogadorCO;
	
	public function __construct(){
		$this->jogadorCO = new JogadorController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->jogadorCO->_salvar($formulario['nome'], $formulario['time'], $formulario['data_nascimento'],$formulario['cpf'],$formulario['numero']);
		echo "Dados inseridos com sucesso";
	}
	public function listarTimesParaSelect(){
		$timeCO = new TimeController();
		return $timeCO->_listarTimesParaSelect();
	}
	public function atualizar(Jogador $dadosJogador){
		return $this->atualizar($dadosJogador);
	}
	public function excluir($id){
		return $this->jogadorCO->_excluir($id);
	}
}
