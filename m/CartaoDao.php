<?php

class CartaoDao extends SuperDao{

    public function __construct() {
        $this->tabela = 'cartoes';
        $this->modelo = 'Cartao';
    }

    public function listar() {

        $url = explode('/', $_GET['url']);

        $lista = false;
        
        $sql = 'select * from ' . $this->tabela . 
            ' where deck = ' . $url[2] . 
            ' order by id';

        Conexao::getConnection();
        $res = mysql_query($sql);

        testarQuery($res);

        while ($result = mysql_fetch_assoc($res)) {
            $obj = new Cartao();
            $obj->setId($result['id']);
            $obj->setFrente($result['frente']);
            $obj->setVerso($result['verso']);
            $obj->setAtivo($result['ativo']);
            $obj->setdeck($result['deck']);
            $lista[] = $obj;
            unset($obj);
        }
        Conexao::closeConnection();
        return $lista;
    }

    public function inserir($obj) {
        $sql = "insert into " . $this->tabela . "(nome, uf, pais) 
              values ( '" . $obj->getNome() . "', 
                       '" . $obj->getUf() . "', 
                       '" . $obj->getPais()->getId() . "' )";

        return $this->executar($sql);
    }

    public function buscar($obj) {

        $sql = 'select * from ' . $this->tabela . ' 
                where id = ' . $obj->getId();

        Conexao::getConnection();
        $res = pg_query($sql);
        $result = pg_fetch_row($res);
        Conexao::closeConnection();

        $obj->setNome($result[1]);
        $obj->setUf($result[2]);
        $obj->setPais($result[3]);
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
