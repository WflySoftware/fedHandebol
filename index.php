<?php
$host = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$caminho = $host.$uri."/";
$app_path = realpath(dirname(__FILE__));
define ('__APP_PATH', $app_path);
define ('__CAMINHO', $caminho);

 include __APP_PATH.'/views/header.php';
 include __APP_PATH.'/views/viewController.php';
 include __APP_PATH.'/views/footer.php';
?>
