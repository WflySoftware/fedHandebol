<?php
include_once(__APP_PATH.'/controller/JogoController.php');

class JogoView{
	private $jogoCO;
	
	public function __construct(){
		$this->jogoCO = new JogoController();
	}
	public function listarTodos(){
		return $this->jogoCO->_listarTodos();
	}
	public function consultarPorId($id){
		return $this->jogoCO->_consultarPorId($id);
	}
	public function inserir(){
			return $this->jogoCO->_inserir($_POST['espectadores'],$_POST['cidade'],$_POST['local'],$_POST['data'],$_POST['hora'],$_POST['duracao'],0);
	}
	public function salvar(){
		return $this->jogoCO->_salvar($_POST['idTimeA'],$_POST['idTimeB'],$_POST['espectadorez'],$_POST['cidade'],$_POST['local'],$_POST['data'],$_POST['hora'],$_POST['duracao']);
	}
	public function excluir($id){
		return $this->jogoCO->_excluir($id);
	}
}