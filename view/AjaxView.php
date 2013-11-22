<?php
include_once('C:/xampp/htdocs/fedHandebol/controller/TempoController.php');

$script = "<script>document.getElementById(\"placarATempo1\").value</script>";
$tempoCO = new TempoController();
$tempoCO->_inserirGolTimeA();