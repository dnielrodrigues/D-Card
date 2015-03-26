<?php

class FrontController implements iController {

    public function executar($url){

        if ($url[0] != "") {
            $modelo = ucfirst($url[0]);
            $acao = $url[1];
        } else {
            $modelo = "Deck";
            $acao = "listar";
        }

        //ESTRUTURA
        require_once 'lib.php';
        require_once 'i/iController.php';
        require_once 'c/SuperController.php';
        require_once 'c/'.$modelo.'Controller.php';
        require_once 'config/Conexao.php';
        @include_once 'm/SuperDao.php';
        @include_once 'm/'.$modelo.'.php';
        @include_once 'm/'.$modelo.'Dao.php';

        $controller = $modelo.'Controller';
        $controller = new $controller();

        $controller->executar($modelo, $acao);

    }

}

?>