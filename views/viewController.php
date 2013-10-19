<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
	case 'ano':
		include(__APP_PATH.'/views/year.php');
		break;
	case 'tipo':
		include(__APP_PATH.'/views/type.php');
		break;
	default:
		include(__APP_PATH.'/views/initial.php');	
}