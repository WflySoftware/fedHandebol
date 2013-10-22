<?php
include_once (__APP_PATH.'/controller/TimeController.php');
include_once (__APP_PATH.'/controller/TecnicoController.php');
class TimeView{
	private $timeCO;
	public function __construct(){
		$this->timeCO = new TimeController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->timeCO->_salvar($formulario['idTecnico'], $formulario['nome'], $formulario['categoria'], $formulario['endereco'], $formulario['dataFundacao'], $formulario['presidente'], $formulario['telefone']);
		echo "Dados inseridos com sucesso";
	}
	public function atualizar($id,$nome,$endereco,$telefone,$cpf){
		
	}
	public function excluir($id){
		
	}
	public function listarTecnicosPorSelect(){
		$tecnicoCO = new TecnicoController();
		return $tecnicoCO->_listarTecnicosParaSelect();
	}
}