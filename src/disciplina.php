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
    return $aluno;
  }

  public function exibeAlunos(){
    echo '<pre>'; 
    print_r($this->alunos);
    echo '</pre>';
  }

  public function setProfessor($Professor){
    $this->professor = $Professor;
  }

  public function calculaMediaTurma(){
    $somaNotas= 0;
    $totaldeNotas = 0;
    foreach($this->alunos as $aluno){
      foreach($aluno->getNotas() as $notas){
        $somaNotas += $notas;
        $totaldeNotas++;
      }
    }  

    if($totaldeNotal === 0){
      return $mediaTurma;
    } else{
      return $somaNotas/$totaldeNotas;
    }
  }

  public function __tostring(){
    $alunoStr = "";
    if(empty($this->alunos)){
      $alunoStr = "Nenhum aluno informado";
    }else{
      foreach($this->alunos as $aluno){
        $alunoStr .= $aluno."\n";
      }
    }

    return '<li>'."Disciplina: ".$this->nmDisciplina.",\n".
    "Carga Horaria: ".$this->cargaHoraria."horas".",\n".
    "Professor: ".$this->professor."\n".
    "Alunos: ".$alunoStr.",\n"."<li>";
  }
}