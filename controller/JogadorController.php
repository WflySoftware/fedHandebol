<?php
include_once(__APP_PATH.'/persistence/JogadorDAO.php');
include_once(__APP_PATH.'/model/Jogador.php');
class JogadorController{
	private $jogadorDAO;
	
	public function __construct(){
		$this->jogadorDAO = new JogadorDAO();
	}
	
	public function _listarTodos(){
		return $this->jogadorDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->jogadorDAO->consultarPorId($id);
	}
	public function _consultarPorTime($idTime){
		return $this->jogadorDAO->consultarPorTime($idTime);
	}
	public function _consultarPorNome($nome){
		return $this->jogadorDAO->consultarPorNome($nome);
	}
	public function _inserir(Jogador $jogador){
		return $this->jogadorDAO->inserir($jogador);
	}
	public function _atualizar(Jogador $jogador){
		return $this->jogadorDAO->atualizar($jogador);
	}
	public function _salvar($nome, $nomeTime,$dataNascimento,$cpf,$numero){
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload(0,$idTime,$nomeTime,$dataNascimento,$cpf,$numero);
		$this->jogadorDAO->inserir($dadosJogador);
	}

}