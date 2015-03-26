<?php

class Cartao {

    private $id;
    private $frente;
    private $verso;
    private $ativo;
    private $deck;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getFrente(){
        return $this->frente;
    }
    
    public function setFrente($frente){
        $this->frente = $frente;
        return $this;
    }

    public function getVerso(){
        return $this->verso;
    }
    
    public function setVerso($verso){
        $this->verso = $verso;
        return $this;
    }

    public function getAtivo(){
        return $this->ativo;
    }
    
    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }

    public function getDeck(){
        return $this->deck;
    }
    
    public function setDeck($deck){
        $this->deck = $deck;
        return $this;
    }

}

?>
