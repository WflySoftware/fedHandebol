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
	public function _listarJogadoresParaTabela(){
		$dadosJogador = new Jogador();
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
            			<a href=\"?pag=jogador&action=edit&id=".$dadosJogador->__getIdJogador()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=jogador&action=exclude&id=".$dadosJogador->__getIdJogador()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		
		return $arrayTr;
	}
	public function _listarTodos(){
		return $this->jogadorDAO->listarTodos();
	}
public function _consultarPorId($id){
		$dadosJogador = new Jogador();
		$dadosJogador =  $this->jogadorDAO->consultarPorId($id);
		$arrayDados['nome'] = $dadosJogador->__getNome();
		$arrayDados['idTime'] = $dadosJogador->__getIdTime();
		$arrayDados['data_nascimento'] = $dadosJogador->__getDataNascimento();
		$arrayDados['cpf'] = $dadosJogador->__getCpf();
		$arrayDados['numero'] = $dadosJogador->__getNumero();
		
		return $arrayDados;
	}
	public function _consultarPorTime($idTime){
		return $this->jogadorDAO->consultarPorTime($idTime);
	}
	public function _consultarPorNome($nome){
		$dadosJogador = new Jogador();
		$dadosJogador =  $this->jogadorDAO->consultarPorNome($id);
		$arrayDados['idTime'] = $dadosJogador->__getIdTime();
		$arrayDados['data_nascimento'] = $dadosJogador->__getDataNascimento();
		$arrayDados['cpf'] = $dadosJogador->__getCpf();
		$arrayDados['numero'] = $dadosJogador->__getNumero();
		
		return $arrayDados;
	}
	public function _inserir(Jogador $jogador){
		return $this->jogadorDAO->inserir($jogador);
	}
	public function _atualizar($idJogador,$idTime,$nome,$dataNascimento,$cpf,$numero){
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload($idJogador,$idTime,$nome,$dataNascimento,$cpf,$numero);
		$this->jogadorDAO->atualizar($dadosJogador);
	}
	public function _salvar($nome, $idTime,$dataNascimento,$cpf,$numero){
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload(0,$idTime,$nome,$dataNascimento,$cpf,$numero);
		$this->jogadorDAO->inserir($dadosJogador);
	}
	public function _excluir($id){
		return $this->jogadorDAO->excluir($id);
	}
	public function _contarRegistrosJogador(){
		return $this->jogadorDAO->contarRegistrosJogador();
	}
	public function _listarArtilheiros(){
		$arrayArtilheiro = $this->jogadorDAO->listarArtilheiros();
		for($i=0;$i<count($arrayArtilheiro);$i++){
			$dadosArtilheiro = $arrayArtilheiro[$i];
			$arrayTr[]= "
			
			 <tr>
			 <th class=\"th-cor\">".$dadosArtilheiro['nome']."</th>
			                     <th class=\"th-cor\">".$dadosArtilheiro['time']."</th>
			                     <th class=\"th-piqueno th-cor\">".$dadosArtilheiro['gols']."</th>
			                 </tr>";
		}
		return $arrayTr;
	}
	public function _listarFearPlayers(){
		$arrayFear = $this->jogadorDAO->listarFearPlayers();
		for($i=0;$i<count($arrayFear);$i++){
			$dadosFear= $arrayFear[$i];
			$arrayTr[]= "
		
			 				<tr>
								 <th class=\"th-cor\">".$dadosFear['nome']."</th>
			                     <th class=\"th-cor\">".$dadosFear['time']."</th>
			                     <th class=\"th-piqueno th-cor\">".$dadosFear['faltas']."</th>
			                 </tr>";
		}
		return $arrayTr;
	}
}