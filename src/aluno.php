<?php

class Aluno extends Pessoa{
  private $matricula;
  private $curso;

  private $notas = [];

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

  public function addNota($nota){
    $this->notas[] = $nota;
  }

  public function getNotas(){
    return $this->notas;
  }

  public function __toString(){
    $notaAluno = "";
    if(empty($this->notas)){
      $notaAluno = "Nenhuma Nota Informada";
    }else{
      $notaAluno = implode(", ",$this->notas);
    }

    return parent::__toString().
    "Matricula: ".$this->matricula."<br>".
    "Curso: ".$this->curso."<br>".
     "Notas: ".$notaAluno;
  }  

}