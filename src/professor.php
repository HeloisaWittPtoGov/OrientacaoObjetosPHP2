<?php

class Professor extends Pessoa {
  private $especialidade;

  public function __construct($nmPessoa, $documento, $idade,$especialidade){
    parent::__construct($nmPessoa, $documento, $idade);
    $this->especialidade = $especialidade;
  }

  public function getEspecialidade() {
    return $this->especialidade;
  }
  public function setEspecialidade($especialidade) {
  $this->especialidade = $especialidade;  
  }

  public function __toString(){
    return parent::__toString()."Especialidade: ".$this->especialidade;
  }
}