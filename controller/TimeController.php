<?php
include_once(__APP_PATH.'/persistence/TimeDAO.php');
include_once(__APP_PATH.'/model/Time.php');
class TimeController{

	private $timeDAO;

	public function __construct(){
		$this->timeDAO = new TimeDAO();
	}
	public function _listarTimesParaSelect(){
		$dadosTime = new Time();
		$arrayDadosTime = $this->timeDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTime); $i++){
			$dadosTime = $arrayDadosTime[$i];
			$arraySelect[] = "<option value=\"".$dadosTime->__getIdTime()."\">".$dadosTime->__getNome()."</option>";
		}
		print_r(lol);
		return $arraySelect;
	}
	public function _listarTimeParaTabela(){
		$dadosTime = new Time();
		$arrayDadosTime = $this->timeDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTime); $i++){
			$dadosTime = $arrayDadosTime[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					
					<td>".$dadosTime->__getIdTime()."</td>
          			<td>".$dadosTime->__getidTecnico()."</td>
					<td>".$dadosTime->__getCategoria()."</td>
          			<td>".$dadosTime->__getEndereco()."</td>
          			<td>".$dadosTime->__getDataFundacao()."</td>
          			<td>".$dadosTime->__getPresidente()."</td>
					<td>".$dadosTime->__getTelefone()."</td>
          			
          			<td>
            			<a href=\"#\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"#\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
	public function _listarTodos(){
		return $this->timeDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->timeDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->timeDAO->consultarPorNome($nome);
	}
	public function _salvar($idTecnico,$nome,$categoria,$endereco,$dataFundacao,$presidente,$telefone){
		$dadosTime = new Time();
		$dadosTime->__constructOverload(0, $idTecnico, $nome, $categoria, $endereco, $dataFundacao, $presidente, $telefone);
		return $this->timeDAO->inserir($dadosTime);
	}
	public function _atualizar(Time $time){
		return $this->timeDAO->atualizar($time);
	}

}
