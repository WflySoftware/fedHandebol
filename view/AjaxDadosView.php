<?php
include_once('C:/xampp/htdocs/fedHandebol/controller/DadosController.php');

$jogadorId= $_GET["jogadorId"];
$jogadorGol= $_GET["jogadorGol"];
$jogadorA= $_GET["jogadorA"];
$jogadorP= $_GET["jogadorP"];
$jogadorD= $_GET["jogadorD"];
$jogadorR= $_GET["jogadorR"];
echo 'aaaa';
$DadoCO = new DadosController();
$DadoCO->_atualizar(1, 1, 1, $jogadorA, $jogadorP, $jogadorD, $jogadorR,$jogadorGol);
