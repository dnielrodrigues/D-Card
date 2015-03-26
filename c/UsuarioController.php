<?php

class UsuarioController extends SuperController {

    public function __construct() {

        session_start();
        if (!isset($_SESSION['user'])) {
            header('location:'.raiz().'/autentica/form');
        }

        $this->dao = 'UsuarioDao';

    }

    protected function inserir() {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $obj = new Login();
        $obj->setLogin($login);
        $obj->setSenha($senha);

        $dao = new $this->dao();
        if ($dao->inserir($obj)) {
            header('location:' . raiz());
        } else {
            $erro = 'Erro ao inserir';
            $this->listar();
        }
    }

    protected function editar() {
        $id = $url[2];
        $obj = new Usuario();
        $obj->setId($id);

        $dao = new $this->dao();
        $obj = $dao->buscar($obj);
        require_once 'v/form' . $this->model . '.php';
    }

    protected function atualizar() {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $nome =$_POST['nome'];
        $cpf =$_POST['cpf'];
        $fotos =$_POST['foto'];
        $telefone =$_POST['telefone'];
        $nascimento =$_POST['nascimento'];
        $ativo =$_POST['ativo'];
        $admin =$_POST['admin'];

        $obj = new Usuario();
        $obj->setId($id);
        $obj->setEmail($email);
        $obj->setLogin($login);
        $obj->setSenha($senha);
        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setFoto($foto);
        $obj->setTelefone($telefone);
        $obj->setNascimento($nascimento);
        $obj->setAtivo($ativo);
        $obj->setAdmin($admin);

        $dao = new $this->dao();
        if ($dao->atualizar($obj)) {
            header('location:' . $urlRaiz);
        } else {
            $erro = "Erro ao editar";
            $this -> listar();
        }
    }

}

?>