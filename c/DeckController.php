<?php

class DeckController extends SuperController {

    public function __construct() {
        session_start();
        if (!isset($_SESSION['user'])) {
            global $urlRaiz;
            header('location:'.raiz().'/autentica/form');
        }

        $this->dao = 'DeckDao';
    }

    protected function cadastrar() {
        $dekDao = new DeckDao();
        $decks = $deckDao->listar();

        require_once 'v/cadastrar' . $this->modelo . '.php';
    }

    protected function inserir() {

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $usuario = "???"; //???

        $obj = new Deck();
        $obj->setNome($nome);
        $obj->setDescricao($descricao);

        $dao = new $this->dao();
        if ($dao->inserir($obj)) {
            header('location:'.raiz().'/deck/listar');
        } else {
            $erro = "Erro ao inserir";
            $this->listar();
        }
    }

    protected function editar() {
        // require_once '../modelo/Deck.php';
        // require_once '../modelo/DeckDao.php';

        $id = $_GET['id'];
        $obj = new Deck();
        $obj->setId($id);

        $dao = new $this->dao();
        $obj = $dao->buscar($obj);

        $paisDao = new PaisDao();
        $paises = $paisDao->listar();

        require_once '../view/form' . $this->modelo . '.php';
    }

    protected function atualizar() {
        require_once '../modelo/Pais.php';
        require_once '../modelo/PaisDao.php';

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $uf = $_POST['uf'];
        $pais = $_POST['pais'];

        $obj = new Deck();
        $obj->setId($id);
        $obj->setNome($nome);
        $obj->setUf($uf);
        $obj->setPais($pais);

        $dao = new $this->dao();
        if ($dao->atualizar($obj)) {
            header('location:frontController.php?m=deck&a=listar');
        } else {
            echo "Erro ao inserir<br>
                 <a href='frontController.php?m=deck&a=listar'>lista</a>";
        }
    }

}

?>