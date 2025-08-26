<?php

class Pessoa{
  private $nmPessoa;
  private $documento;
  private $idade;

  public function __construct($nmPessoa,$documento,$idade){
    $this->nmPessoa = $nmPessoa;
    $this->documento = $documento;
    $this->idade = $idade;
  }
  public function getNmPessoa(){
    return $this->nmPessoa;
  }

  public function setNmPessoa($nmPessoa){
    $this->nmPessoa = $nmPessoa;
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
    return "<br> Nome: ".$this->nmPessoa."<br>".
    "Idade: ".$this->idade."<br>".
    "Documento: ".$this->documento."<br>";
  }

}