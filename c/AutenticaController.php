<?php

class AutenticaController extends SuperController{
    
    public function login() {
        require_once 'm/Usuario.php';
        require_once 'm/UsuarioDao.php';
        
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $usuario = new Usuario();
        
        //testa login por usuário ou senha
        if (stripos($login,"@") === false) {
            $usuario->setLogin($login);
        }else{
            $usuario->setEmail($login);
        }
        $usuario->setSenha($senha);
                
        $dao = new UsuarioDao();
        $usuario = $dao->autenticar($usuario);

        if( $usuario->getId() ){
            
            session_start();
            $_SESSION['user'] = $usuario;
            global $urlRaiz;
            header('location:' . raiz() . '/deck/listar');

        }else{
            $erro = "Erro ao Efetuar Login";
            include "v/formLogin.php";
        }
        
    }

    public function logout() {
        global $urlRaiz;
        session_start();
        session_destroy();
        header('location:'.raiz().'/autentica/form');
    }

    public function form() {
        require_once 'v/formLogin.php';
    }

    public function cadastrar(){
        require_once 'v/formUsuario.php';
    }

}

?>