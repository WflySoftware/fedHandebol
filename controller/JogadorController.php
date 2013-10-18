<?php

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
	public function _consultarPorIdTime($idTime){
		return $this->jogadorDAO->consultarPorIdTime($idTime);
	}
	public function _consultarPorNome($nome){
		return $this->jogadorDAO->consultarPorNome($nome);
	}
	public function _consultarPorDataDeNascimento($dataNascimento){
		return $this->jogadorDAO->consultarPorDataDeNascimento($dataNascimento);
	}
	public function _consultarPorCpf($cpf){
		return $this->jogadorDAO->consultarPorCpf($cpf);
	}
	public function _consultarPorNumero($numero){
		return $this->jogadorDAO->consultarPorNumero($numero);
	}
	public function _inserirJogador(Jogador $jogador){
		return $this->jogadorDAO->inserirJogador($jogador);
	}

}