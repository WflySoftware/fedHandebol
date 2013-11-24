<?php
include_once('C:/xampp/htdocs/fedHandebol/controller/DadosTimeController.php');

$timeA= $_GET["idA"];
$timeB= $_GET["idB"];


$DadosTimeCO = new DadosTimeController();
$DadosTimeCO->_atualizar($timeA,10, 5,4, 1, 0, 22, 41);

