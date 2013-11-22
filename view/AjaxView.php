<?php
include_once('C:/xampp/htdocs/fedHandebol/controller/TempoController.php');

$placarA= $_GET["placarA"];
$placarB= $_GET["placarB"];
$seteMetrosA= $_GET["seteMetrosA"];
$seteMetrosB= $_GET["seteMetrosB"];
$seteMetros = $seteMetrosA + $seteMetrosB;

$tempoCO = new TempoController();
$tempoCO->_inserirGolTimeA($placarA,$seteMetros);
$tempoCO->_inserirGolTimeB($placarB);