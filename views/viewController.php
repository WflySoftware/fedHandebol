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
		include($_SERVER['DOCUMENT_ROOT'].'/fedHandebol/views/cad_Tecnico.php');
		break;	
	default:
		include(__APP_PATH.'/views/initial.php');	
}