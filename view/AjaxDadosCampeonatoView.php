<?php
include_once('C:/xampp/htdocs/fedHandebol/controller/DadosTimeController.php');

$timeA = isset( $_GET['idA'] ) ? $_GET['idA'] : null;
$timeB = isset( $_GET['idB'] ) ? $_GET['idB'] : null;
$golsTimeA = isset( $_GET['golsTimeA'] ) ? $_GET['golsTimeA'] : null;
$golsTimeB = isset( $_GET['golsTimeB'] ) ? $_GET['golsTimeB'] : null;



$DadosTimeCO = new DadosTimeController();
$DadosTimeCO->_atualizarPontos($timeA, $timeB, $golsTimeA, $golsTimeB);

