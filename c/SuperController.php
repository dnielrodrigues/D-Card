<?php

class SuperController {

    //protected $entity; ????????
    protected $modelo;
    protected $dao;

    public function executar($modelo, $acao) {
        $this->modelo = $modelo;
        $this->$acao();
    }

    protected function listar() {
        $dao = new $this->dao();
        $lista = $dao->listar();
        require_once 'v/listar' . $this->modelo . '.php';
    }

    protected function excluir() {
        $id = $_GET['id'];
        $obj = new $this->modelo();
        $obj->setId($id);

        $dao = new $this->dao();
        if ($dao->excluir($obj)) {
            header('location:frontController.php?m='.$this->modelo.'&a=listar');
        } else {
            echo "Erro ao inserir<br>
                 <a href='frontController.php?m='.$this->modelo.'&a=listar'>lista</a>";
        }
    }

    protected function buscar($obj) {
        $dao = new $this->dao();
        return $dao->buscar($obj);
    }

    protected function cadastrar() {
        require_once 'v/cadastrar' . $this->modelo . '.php';
    }

}

?>