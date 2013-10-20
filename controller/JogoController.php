<?php
include_once(__APP_PATH.'/persistence/JogoDAO.php');
include_once(__APP_PATH.'/model/Jogo.php');
class JogoController{

	private $jogoDAO;

	public function __construct(){
		$this->jogoDAO = new JogoDAO();
	}

	public function _listarTodos(){
		return $this->jogoDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->jogoDAO->consultarPorId($id);
	}
	public function _consultarPorEspectadores($espectadores){
		return $this->jogoDAO->consultarPorEspectadores($espectadores);
	}
	public function _consultarPorCidade($cidade){
		return $this->jogoDAO->consultarPorCidade($cidade);
	}
	public function _consultarPorLocalizacao($localizacao){
		return $this->jogoDAO->consultarPorLocalizacao($localizacao);
	}
	public function _consultarPorDataJogo($dataJogo){
		return $this->jogoDAO->consultarPorDataJogo($dataJogo);
	}
	public function _consultarPorDuracao($duracao){
		return $this->jogoDAO->consultarPorDuracao($duracao);
	}
	public function _consultarPorTotal7Metros($total7Metros){
		return $this->jogoDAO->consultarPorTotal7Metros($total7Metros);
	}
	public function _inserirJogo(Jogo $jogo){
		return $this->jogoDAO->inserirJogo($jogo);
	}
	public function _atualizar(Jogo $jogo){
		return $this->jogoDAO->atualizar($jogo);
	}
}