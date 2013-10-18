<?php

class Arbitro
{
	private $idArbitro;
	private $nome;
	private $telefone;
	private $cpf;
	private $carteira;

	public function __construct(){

	}
	public function __getIdArbitro(){
		return $this->idArbitro;
	}
	public function __setIdTecnico($idArbitro){
		$this->idArbitro = $idArbitro;
	}
	public function __getNome(){
		return $this->nome;
	}
	public function __setNome($nome){
		$this->nome = $nome;
	}
	public function __getTelefone(){
		return $this->telefone;
	}
	public function __setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function __getCpf(){
		return $this->cpf;
	}
	public function __setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function __getCarteira(){
		return $this->cpf;
	}
	public function __setCarteira($cpf){
		$this->cpf = $cpf;
	}
}



