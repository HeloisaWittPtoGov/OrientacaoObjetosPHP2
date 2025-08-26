<?php

class Disciplina{
  private $nmDisciplina;
  private $cargaHoraria;

  private $alunos = [];

  public function addAluno($nmPessoa, $documento, $idade, $matricula, $curso){
    $aluno = new Aluno($nmPessoa, $documento, $idade, $matricula, $curso);
    $this->alunos[] = $aluno;
  }

  public function exibeAlunos(){
    print_r($this->alunos);
  }

  public function addProfessor($Professor){
    $this->professor = $Professor;
  }

public function exibeResumoDisciplina(){
  return "Disciplina: ".$this->nmDisciplina."\n".
  "Carga Horária: ".$this->cargaHoraria."\n".
  "Professor: ".$this->professor."\n".
  "Alunos: ".$this->alunos."\n";
}
}