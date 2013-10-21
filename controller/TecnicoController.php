<?php
include_once(__APP_PATH.'/persistence/TecnicoDAO.php');
include_once(__APP_PATH.'/model/Tecnico.php');
class TecnicoController{

	private $tecnicoDAO;

	public function __construct(){
		$this->tecnicoDAO = new TecnicoDAO();
	}

	public function _listarTecnicosParaSelect(){
		$dadosTecnico = new Tecnico();
		$arrayDadosTecnico = $this->tecnicoDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTecnico); $i++){
			$dadosTecnico = $arrayDadosTecnico[$i];
			$arraySelect[] = "<option value=\"$dadosTecnico->__getIdTecnico()\">$dadosTecnico->__getNome()</option>";
		}
		return $arraySelect;
	}
	public function _consultarPorId($id){
		return $this->tecnicoDAO->consultarPorId($id);
	}
	public function _consultarPorNome($nome){
		return $this->tecnicoDAO->consultarPorNome($nome);
	}
	public function _consultarPorEndereco($endereco){
		return $this->tecnicoDAO->consultarPorEndereco($endereco);
	}
	public function _consultarPorTelefone($telefone){
		return $this->tecnicoDAO->consultarPorTelefone($telefone);
	}
	public function _consultarPorCpf($cpf){
		return $this->tecnicoDAO->consultarPorCpf($cpf);
	}
	public function _salvar($nome,$telefone,$cpf){
		$dadosTecnico = new Tecnico();
		$dadosTecnico->__constructOverload(0, $nome, $telefone, $cpf);
		$this->tecnicoDAO->inserir($dadosTecnico);
	}
	public function _atualizar(Tecnico $tecnico){
		return $this->tecnicoDAO->atualizar($tecnico);
	}
}
