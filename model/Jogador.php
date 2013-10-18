<?php
class Jogador
{
	private $idJogador;
	private $idTime;
	private $nome;
	private $dataNascimento;
	private $cpf;
	private $numero;
	
	public function __construct(){
		
	}
	public function __getIdJogador(){
		return $this->idJogador;
	}
	public function __setIdJogador($idJogador){
		$this->idJogador = $idJogador;
	}
	public function __getNome(){
		return $this->nome;
	}
	public function __setNome($nome){
		$this->nome = $nome;
	}
	public function __getDataNascimento(){
		return $this->dataNascimento;
	}
	public function __setDataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}
	public function __getCpf(){
		return $this->cpf;
	}
	public function __setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function __getIdTime(){
		return $this->idTime;
	}
	public function __setIdTime($idTime){
		$this->idTime = $idTime;
	}
	public function __getNumero(){
		return $this->numero;
	}
	public function __setNumero($numero){
		$this->numero = $numero;
	}
}

