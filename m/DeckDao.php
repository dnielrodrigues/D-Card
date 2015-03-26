<?php

class DeckDao extends SuperDao{

    public function __construct() {
        $this->tabela = 'decks';
        $this->modelo = 'Deck';
    }

    public function listar() {

        // $teste = $_SESSION['user'];
        // echo $teste->getLogin;

        // //DEBUG
        // echo '<pre>';
        // print_r($args); exit();
        // OU
        // echo "<pre>";
        // var_dump($linhas);
        // die();
        // include "m/Usuario.php";

        // $teste = $_SESSION['user'];
        // $teste = unserialize ($teste);
        // echo $teste->email;

        // echo"<pre>";
        // print_r($teste); exit();

        $lista = false;

        $sql = 'select * from ' . $this->tabela . ' order by nome';

        Conexao::getConnection();
        $res = mysql_query($sql);

        while ($result = mysql_fetch_assoc($res)) {
            $obj = new Deck();
            $obj->setId($result['id']);
            $obj->setNome($result['nome']);
            $obj->setDescricao($result['descricao']);
            $lista[] = $obj;
            unset($obj);
        }
        Conexao::closeConnection();
        return $lista;
    }

    public function inserir($obj) {
        $sql = "insert into " . $this->tabela . "(id, nome, descricao, ativo, usuario) 
              values ( '" . $obj->getId() . "', 
                       '" . $obj->getNome() . "',
                       '" . $obj->getDescricao() . "'
                       '" . $obj->getPais()->getId() . "' )";

        return $this->executar($sql);
    }

    public function buscar($obj) {

        $sql = 'select * from ' . $this->tabela . ' 
                where id = ' . $obj->getId();

        Conexao::getConnection();
        $res = mysql_query($sql);
        $result = mysql_fetch_row();
        Conexao::closeConnection();

        $obj->setNome($result[1]);
        $obj->setDescricao($result[2]);
        $obj->setAtivo($result[3]);
        $obj->setUsuario($result[3]);
        return $obj;
    }

    public function atualizar($obj) {
        $sql = "update " . $this->tabela . " set 
                    nome = '" . $obj->getNome() . "', 
                    uf = '" . $obj->getUf() . "',
                    pais = '" . $obj->getPais()->getId() . "'
                where id = " . $obj->getId();
        
        return $this->executar($sql);
    }
}
?>
