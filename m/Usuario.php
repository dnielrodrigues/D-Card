<?php

class Usuario {

    private $id;
    private $email;
    private $login;
    private $senha;
    private $nome;
    private $cpf;
    private $foto;
    private $telefone;
    private $nascimento;
    private $ativo;
    private $admin;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getLogin(){
        return $this->login;
    }
    
    public function setLogin($login){
        $this->login = $login;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }

    public function getFoto(){
        return $this->foto;
    }
    
    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getNascimento(){
        return $this->nascimento;
    }
    
    public function setNascimento($nascimento){
        $this->nascimento = $nascimento;
        return $this;
    }

    public function getAtivo(){
        return $this->ativo;
    }
    
    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }

    public function getAdmin(){
        return $this->admin;
    }
    
    public function setAdmin($admin){
        $this->admin = $admin;
        return $this;
    }

}

?>
