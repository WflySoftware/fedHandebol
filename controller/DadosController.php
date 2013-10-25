<?php
include_once(__APP_PATH.'/persistence/DadosDAO.php');
include_once(__APP_PATH.'/model/Dados.php');
class DadosController{
	
	private $dadosDAO;
	
	public function __construct(){
		$this->dadosDAO = new DadosDAO();
	}
	public function _listarDadosParaTabela(){
		$dadosDados = new Dados();
		$arrayDados = $this->dadosDAO->listarTodos();
		for($i=0;$i<count($arrayDados); $i++){
			$dadosDados = $arrayDados[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosDados->__getIdDados()."</td>
          			<td>".$dadosDados->__getIdJogador()."</td>
          			<td>".$dadosDados->__getIdTempo()."</td>
          			<td>".$dadosDados->__getAdvertencia()."</td>
          			<td>".$dadosDados->__getPunicao()."</td>
          			<td>".$dadosDados->__getDesqualificacao()."</td>
          			<td>".$dadosDados->__getRelatorio()."</td>
          			<td>
            			<a href=\"?pag=dados&action=edit&id=".$dadosDados->__getIdDados()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=dados&action=exclude&id=".$dadosDados->__getIdDados()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
	public function _listarTodos(){
		return $this->dadosDAO->listarTodos();
	}
	public function _consultarPorId($id){
		$dadosDados= new Dados();
		$dadosDados=  $this->dadosDAO->consultarPorId($id);
		$arrayDados['advertencia'] = $dadosDados->__getAdvertencia();
		$arrayDados['punicao'] = $dadosDados->__getPunicao();
		$arrayDados['desqualificacao'] = $dadosDados->__getDesqualificacao();
		$arrayDados['relatorio'] = $dadosDados->__getRelatorio();
		
		return $arrayDados;
	}
	public function _consultarPorRelatorio($relatorio){
		$dadosDados = new Dados();
		$dadosDados = $this->dadosDAO->consultarPorRelatorio($relatorio);
		return $dadosDados;
	}
	public function _inserir(Dados $dados){
		return $this->dadosDAO->inserir($dados);
	}
	public function _atualizar($idDados,$idJogador,$idTempo,$advertencia,$punicao,$desqualificacao,$relatorio){
		$dadosDados = new Dados();
		$dadosDados->__constructOverload($idDados,$idJogador,$idTempo,$advertencia,$punicao,$desqualificacao,$relatorio);
		$this->dadosDAO->atualizar($dadosDados);
	}
	public function _salvar($idJogador,$idTempo,$advertencia,$punicao,$desqualificacao,$relatorio){
		$dadosDados= new Dados();
		$dadosDados->__constructOverload(0,$idJogador,$idTempo,$advertencia,$punicao,$desqualificacao,$relatorio);
		$this->dadosDAO->inserir($dadosDados);
	}
	public function _excluir($id){
		return $this->dadosDAO->excluir($id);
	}
}