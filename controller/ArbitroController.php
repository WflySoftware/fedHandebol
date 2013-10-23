<?php
include_once(__APP_PATH.'/persistence/ArbitroDAO.php');
include_once(__APP_PATH.'/model/Arbitro.php');
class ArbitroController{
	
	private $arbitroDAO;
	
	public function __construct(){
		$this->arbitroDAO = new ArbitroDAO();
	}
	public function _listarArbitrosParaTabela(){
		$dadosArbitro = new Arbitro();
		$arrayDadosArbitro = $this->arbitroDAO->listarTodos();
		for($i=0;$i<count($arrayDadosArbitro); $i++){
			$dadosArbitro = $arrayDadosArbitro[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosArbitro->__getIdArbitro()."</td>
          			<td>".$dadosArbitro->__getNome()."</td>
          			<td>".$dadosArbitro->__getTelefone()."</td>
          			<td>".$dadosArbitro->__getCpf()."</td>
          			<td>
            			<a href=\"?pag=arbitro&action=edit\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"#\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
	public function _listarArbitrosParaEditar(){
		$dadosArbitro = new Arbitro();
		$auxButton = 0;
		$arrayDadosArbitro = $this->arbitroDAO->listarTodos();
		for($i=0;$i<count($arrayDadosArbitro); $i++){
			$dadosArbitro = $arrayDadosArbitro[$i];
			$auxButton ++;
			$aux[] = $auxButton;
			
		}
		echo $dadosArbitro->__getNome();
		echo $dadosArbitro->__getTelefone();
		echo $dadosArbitro->__getCpf();
	}
	public function _listarNomeArbitrosParaEditar(){
		$dadosArbitro = new Arbitro();
		$auxButton = 0;
		$arrayDadosArbitro = $this->arbitroDAO->listarTodos();
		for($i=0;$i<count($arrayDadosArbitro); $i++){
			$dadosArbitro = $arrayDadosArbitro[$i];
			$auxButton ++;
			$aux[] = $auxButton;
			
		}
		echo $dadosArbitro->__getNome();
	}
	public function _listarTelefoneArbitrosParaEditar(){
		$dadosArbitro = new Arbitro();
		$auxButton = 0;
		$arrayDadosArbitro = $this->arbitroDAO->listarTodos();
		for($i=0;$i<count($arrayDadosArbitro); $i++){
			$dadosArbitro = $arrayDadosArbitro[$i];
			$auxButton ++;
			$aux[] = $auxButton;
				
		}
		echo $dadosArbitro->__getTelefone();
	}
	public function _listarCpfArbitrosParaEditar(){
		$dadosArbitro = new Arbitro();
		$auxButton = 0;
		$arrayDadosArbitro = $this->arbitroDAO->listarTodos();
		for($i=0;$i<count($arrayDadosArbitro); $i++){
			$dadosArbitro = $arrayDadosArbitro[$i];
			$auxButton ++;
			$aux[] = $auxButton;
	
		}
		echo $dadosArbitro->__getCpf();
	}
	
	
	public function _listarTodos(){
		return $this->arbitroDAO->listarTodos();
	}
	public function _consultarPorId($id){
		return $this->arbitroDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->arbitroDAO->consultarPorNome($nome);
	}
	public function _inserir(Arbitro $arbitro){
		return $this->arbitroDAO->inserir($arbitro);
	}
	public function _atualizar(Arbitro $arbitro){
		return $this->arbitroDAO->atualizar($arbitro);
	}
	public function _salvar($nome, $telefone,$cpf){
		$dadosArbitro = new Arbitro();
		$dadosArbitro->__constructOverload(0, $nome, $telefone, $cpf);
		$this->arbitroDAO->inserir($dadosArbitro);
	}
	public function _excluir($id){
		return $this->arbitroDAO->excluir($id);
	}
}