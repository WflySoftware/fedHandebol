<?php
class Jogo{
	private $idJogo;
	private $espectadores;
	private $cidade;
	private $localizacao;
	private $dataJogo;
	private $duracao;
	private $total7Metros;
	
	public function __construct(){
	
	}
	public function __getIdJogo(){
		return $this->idJogo;
	}
	public function __setIdJogo($nome){
		$this->idJogo = $idJogo;
	}
	public function __getEspectadores(){
		return $this->espectadores;
	}
	public function __setEspectadores($espectadores){
		$this->espectadores = $espectadores;
	}
	public function __getCidade(){
		return $this->cidade;
	}
	public function __setCidade($cidade){
		$this->cidade = $cidade;
	}
	public function __getLocalizacao(){
		return $this->localizacao;
	}
	public function __setLocalizacao($localizacao){
		$this->localizacao = $localizacao;
	}
	public function __getDataJogo(){
		return $this->dataJogo;
	}
	public function __setDataJogo($dataJogo){
		$this->dataJogo = $dataJogo;
	}
	public function __getDuracao(){
		return $this->duracao;
	}
	public function __setDuracao($duracao){
		$this->duracao = $duracao;
	}
	public function __getTotal7Metros(){
		return $this->total7Metros;
	}
	public function __setTotal7Metros($total7Metros){
		$this->total7Metros = $total7Metros;
	}
}