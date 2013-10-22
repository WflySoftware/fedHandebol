<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
	case 'ano':
		include(__APP_PATH.'/views/year.php');
		break;
	case 'tipo':
		include(__APP_PATH.'/views/type.php');
		break;
	case 'tecnico':
		include(__APP_PATH.'/views/cad_Tecnico.php');
		break;
	case 'jogador':
		include(__APP_PATH.'/views/cad_Jogador.php');
		break;		
	case 'arbitro':
		include(__APP_PATH.'/views/cad_Arbitro.php');
		break;		
	case 'time':
		include(__APP_PATH.'/views/cad_Time.php');
		break;	
	case 'sumula':
		include(__APP_PATH.'/views/sumula.php');
		break;
	case 'consultarTecnico':
		include(__APP_PATH.'/views/rud_Tecnico.php');	
		break;
	default:
		include(__APP_PATH.'/views/initial.php');	
}