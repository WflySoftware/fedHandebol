<?php
class Tecnico
{
	private $idTecnico;
	private $nome;
	private $endereco;
	private $telefone;
	private $cpf;
	
	public function __construct(){
		
	}
	public function __getIdTecnico(){
		return $this->idTecnico;
	}
	public function __setIdTecnico($idTecnico){
		$this->idTecnico = $idTecnico;
	}
	public function __getNome(){
		return $this->nome;
	}
	public function __setNome($nome){
		$this->nome = $nome;
	}
	public function __getEndereco(){
		return $this->endereco;
	}
	public function __setEndereco($endereco){
		$this->endereco = $endereco;
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
}



