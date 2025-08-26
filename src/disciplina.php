<?php

class Disciplina{
  private $nmDisciplina;
  private $cargaHoraria;

  private $alunos = [];

  private $professor;

  public function __construct($nmDisciplina, $cargaHoraria) {
    $this->nmDisciplina = $nmDisciplina;
    $this->cargaHoraria = $cargaHoraria;
  }

  public function addAluno($nmPessoa, $documento, $idade, $matricula, $curso){
    $aluno = new Aluno($nmPessoa, $documento, $idade, $matricula, $curso);
    $this->alunos[] = $aluno;
  }

  public function exibeAlunos(){
    print_r($this->alunos);
  }

  public function setProfessor($Professor){
    $this->professor = $Professor;
  }

  public function __tostring(){
    return "Disciplina: ".$this->nmDisciplina.",\n".
    "Carga Horaria: ".$this->cargaHoraria."horas".",\n".
    "Professor: ".$this->professor.",\n".
    "Alunos: ".$alunos->aluno.",\n";
  }
}