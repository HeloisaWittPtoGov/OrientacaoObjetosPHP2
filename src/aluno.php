<?php

class Aluno extends Pessoa{
  private $matricula;
  private $curso;

  public function __construct($nome, $documento, $idade, $matricula, $curso){
    parent::__construct($nome, $documento, $idade);
    $this->matricula = $matricula;
    $this->curso = $curso;
  }

  public function getMarticula(){
    return $this->marticula;
  }

  public function getCurso(){
    return $this->curso;
  }

  public function setCurso(){
    $this->curso = $curso;
  }

  public function consultaDadosAluno(){
    parent::__toString().
    "Matricula: ".$this->matricula."\n".
    "Curso: ".$this->curso;
  }  
  
  
}