<?php
include_once(__APP_PATH.'/mds2013/controller/ArbitroController.php');

class ArbitroView{
	private $arbitroCO;
	public function __construct(){
		$this->arbitroCO = new ArbitroController();
	}
	public function salvar($nome,$telefone,$cpf){
	
	}
}