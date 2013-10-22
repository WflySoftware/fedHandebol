<?php
include_once(__APP_PATH.'/persistence/JogadorDAO.php');
include_once(__APP_PATH.'/model/Jogador.php');
class JogadorController{
	private $jogadorDAO;
	
	public function __construct(){
		$this->jogadorDAO = new JogadorDAO();
	}
	public function _listarTecnicosParaSelect(){
		$dadosJogador = new Jogador();
		$arrayDadosJogador = $this->jogadorDAO->listarTodos();
		for($i=0;$i<count($arrayDadosJogador); $i++){
			$dadosJogador = $arrayDadosJogador[$i];
			$arraySelect[] = "<option value=\"".$dadosJogador->__getIdJogador()."\">".$dadosJogador->__getNome()."</option>";
		}
		return $arraySelect;
	}
	public function _listarJogadorParaTabela(){
		$dadosJogador = new Jogagod();
		$arrayDadosJogador = $this->jogadorDAO->listarTodos();
		for($i=0;$i<count($arrayDadosJogador); $i++){
			$dadosJogador = $arrayDadosJogador[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosJogador->__getIdJogador()."</td>
          			<td>".$dadosJogador->__getIdTime()."</td>
          			<td>".$dadosJogador->__getNome()."</td>
          			<td>".$dadosJogador->__getDataNascimento()."</td>
          			<td>".$dadosJogador->__getCpf()."</td>
          			<td>".$dadosJogador->__getNumero()."</td>
          			<td>
            			<a href=\"?\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"#\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
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
	public function _atualizar(Jogador $dadosJogador){
		return $this->jogadorDAO->atualizar($dadosJogador);
	}
	public function _salvar($nome, $nomeTime,$dataNascimento,$cpf,$numero){
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload(0,$idTime,$nomeTime,$dataNascimento,$cpf,$numero);
		$this->jogadorDAO->inserir($dadosJogador);
	}
	public function _excluir($id){
		return $this->jogadorDAO->excluir($id);
	}

}