<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
	case 'ano':
		include($_SERVER['DOCUMENT_ROOT'].'/fedHandebol/views/year.php');
		break;
	case 'tipo':
		include($_SERVER['DOCUMENT_ROOT'].'/fedHandebol/views/type.php');
		break;
	case 'tecnico':
		include($_SERVER['DOCUMENT_ROOT'].'/fedHandebol/views/cad_Tecnico.php');
		break;	
	default:
		include($_SERVER['DOCUMENT_ROOT'].'/fedHandebol/views/initial.php');	
}