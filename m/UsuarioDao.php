<?php

class UsuarioDao extends SuperDao{

    public function __construct() {
        $this->tabela = 'usuarios';
        $this->modelo = 'Usuario';
    }

    public function listar() {
        $lista = false;

        $sql = 'select * from ' . $this->table . ' order by nome';

        Conexao::getConnection();
        $res = mysql_query($sql);
        while ($result = mysql_fetch_assoc($res)) {
            $obj = new Usuario();
            $obj->setId($result['id']);
            $obj->setEmail($result['email']);
            $obj->setLogin($result['login']);
            $obj->setSenha($result['senha']);
            $obj->setNome($result['nome']);
            $obj->setCpf($result['cpf']);
            $obj->setFoto($result['foto']);
            $obj->setTelefone($result['telefone']);
            $obj->setNascimento($result['nascimento']);
            $obj->setAtivo($result['ativo']);
            $obj->setAdmin($result['admin']);
            $lista[] = $obj;
            unset($obj);
        }
        Conexao::closeConnection();
        return $lista;
    }

    public function inserir($obj) {
        $sql = "insert into " . $this->table . "(id, email, login, senha, nome, cpf, foto, telefone, nascimento, ativo, admin) 
                values (
                    NULL,
                    '" . $obj->getEmail() . "',
                    '" . $obj->getLogin() . "', 
                    '" . $obj->getSenha() . "',
                    '" . $obj->getNome() . "',
                    '" . $obj->getCpf() . "',
                    '" . $obj->getFoto() . "',
                    '" . $obj->getTelefone() . "',
                    '" . $obj->getNascimento() . "',
                    true,
                    '" . $obj->getAdmin() . "'
                )";

        return $this->executar($sql);
    }

    public function buscar($obj) {

        $sql = 'select * from ' . $this->table . ' 
                where id = ' . $obj->getId();

        Conexao::getConnection();
        $res = mysql_query($sql);
        $result = mysql_fetch_row($res);
        Conexao::closeConnection();

        $obj->setId($result['id']);
        $obj->setEmail($result['email']);
        $obj->setLogin($result['login']);
        $obj->setSenha($result['senha']);
        $obj->setNome($result['nome']);
        $obj->setCpf($result['cpf']);
        $obj->setFoto($result['foto']);
        $obj->setTelefone($result['telefone']);
        $obj->setNascimento($result['nascimento']);
        $obj->setAtivo($result['ativo']);
        $obj->setAdmin($result['admin']);
        return $obj;
    }

    public function atualizar($obj) {
        $sql = "update " . $this->tabela . " set 
                    email = '" . $obj->getEmail() . "',
                    login = '" . $obj->getLogin() . "',
                    senha = '" . $obj->getSenha() . "',
                    nome = '" . $obj->getNome() . "',
                    cpf = '" . $obj->getCpf() . "',
                    foto = '" . $obj->getFoto() . "',
                    telefone = '" . $obj->getTelefone() . "',
                    nascimento = '" . $obj->getNascimento() . "',
                    ativo = '" . $obj->getAtivo() . "',
                    admin = '" . $obj->getAdmin() . "'
                where id = " . $obj->getId();

        return $this->executar($sql);
    }

    public function autenticar($obj) {
        //Testa login por usuário ou email
        if ($obj->getLogin()) {
            $sql = "select * from ".$this->tabela."
                where login='".$obj->getLogin()."'
                and senha='".$obj->getSenha()."'";
        }else{
            $sql = "select * from ".$this->tabela."
                where email='".$obj->getEmail()."'
                and senha='".$obj->getSenha()."'";
        }        
        
        Conexao::getConnection();
        $res = mysql_query($sql);
        $result = mysql_fetch_row($res);
        Conexao::closeConnection();

        $obj->setId($result[0]);
        return $obj;
    }

}
?>