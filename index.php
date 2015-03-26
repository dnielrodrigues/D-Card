<?php

//CARREGA INTERFACE E CLASSE PRIMARIAS
require_once "i/iController.php";
require_once "c/FrontController.php";

//CARREGA URL
if (isset($_GET['url'])) {
  $url = explode('/', $_GET['url']);
} else {
  $url[] = "";
}

//EXECUTA CLASSE PRIMARIA
$controller = new FrontController();
$controller->executar($url);

?>