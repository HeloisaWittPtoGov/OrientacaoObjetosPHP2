<?php

class Pessoa{
  private $nome;
  private $documento;
  private $idade;

  public function __construct($nome,$documento,$idade){
    $this->nome = $nome;
    $this->documento = $documento;
    $this->idade = $idade;
  }
  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getDocumento(){
    return $this->documento;
  }
  public function getIdade(){
    return $this->idade;
  }        
  public function setIdade($idade){
    $this->idade = $idade;  
  }

  public function __toString(){
    return "Nome: ".$this->nome."\n".
    "Idade: ".$this->idade."\n".
    "Documento: ".$this->documento."\n";
  }

}