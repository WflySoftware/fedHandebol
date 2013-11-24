<?php
include_once('C:/xampp/htdocs/fedHandebol/persistence/DadosTimeDAO.php');
include_once('C:/xampp/htdocs/fedHandebol/model/DadosTime.php');
class DadosTimeController{
	private $dadosTimeDAO;
	
	public function __construct(){
		$this->dadosTimeDAO = new DadosTimeDAO();
	}
	public function _listarTodos(){
		return $this->dadosTimeDAO->listarTodos();
	}
	public function _consultarPorId($id){
		$dadosDadosTime = new DadosTime();
		$dadosDadosTime =  $this->dadosTimeDAO->consultarPorId($id);
		//$arrayDados['nome'] = $dadosArbitro->__getNome();
		//$arrayDados['telefone'] = $dadosArbitro->__getTelefone();
		//$arrayDados['cpf'] = $dadosArbitro->__getCpf();
	
		return $arrayDados;
	}
	public function _inserir(DadosTime $dadosTime){
		return $this->dadosTimeDAO->inserir($dadosTime);
	}
	public function _atualizar($idDadosTime,$pontos,$jogos,$vitorias,$empates,$derrotas,$gols,$golsLevados){
		$dadosDadosTime = new DadosTime();
		$dadosDadosTime->__constructOverload(1,$idDadosTime,$pontos,$jogos,$vitorias,$empates,$derrotas,$gols,$golsLevados);
		$this->dadosTimeDAO->atualizar($dadosDadosTime);
	}
	public function _excluir($id){
		return $this->dadosTimeDAO->excluir($id);
	}
}
