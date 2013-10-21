<?php
include_once(__APP_PATH.'/mds2013/controller/JogadorController.php');

class JogadorView{
	private $jogadoroCO;
	
	public function __construct(){
		$this->jogadorCO = new JogadorController();
	}
}
