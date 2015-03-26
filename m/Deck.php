<?php
class Deck {

    private $id;
    private $nome;
    private $descricao;
    private $ativo;
    private $usuario;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

    public function getAtivo(){
        return $this->ativo;
    }
    
    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }

    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setUsuario($usuario) {
        $obj = new Usuario();
        $obj->setId($usuario);
        $usuarioDao = new UsuarioDao();
        $this->usuario = $usuarioDao->buscar($obj);
    }

    // public function setUsuario($usuario){
    //     $this->usuario = $usuario;
    //     return $this;
    // }

}

?>
