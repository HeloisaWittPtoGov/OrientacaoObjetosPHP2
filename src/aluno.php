<?php

class Aluno extends Pessoa{
  private $matricula;
  private $curso;

  public function __construct($nmPessoa, $documento, $idade, $matricula, $curso){
    parent::__construct($nmPessoa, $documento, $idade);
    $this->matricula = $matricula;
    $this->curso = $curso;
  }

  public function getMarticula(){
    return $this->matricula;
  }

  public function getCurso(){
    return $this->curso;
  }

  public function setCurso(){
    $this->curso = $curso;
  }

  public function __toString(){
    return parent::__toString().
    "Matricula: ".$this->matricula.",\n".
    "Curso: ".$this->curso;
  }  

}