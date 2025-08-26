<?php

require_once "pessoa.php";
require_once "aluno.php";
require_once "professor.php";
require_once "disciplina.php";

$disciplina1 = new Disciplina("Matematica", 20);
$disciplina2 = new Disciplina("Fisica",20);

$professor1 = new Professor("Lucas",1236549856,40,"Mestrado Matematica");
$professor2 = new Professor("Ana",3214569856,40,"Mestrado Fisica");

$aluno1 = $disciplina1->addAluno("Heloisa",90546281956,20,00102025,"ESO");
$aluno2 = $disciplina1->addAluno("Maria",50926481956,21,00202025,"ESO");

$aluno3 = $disciplina2->addAluno("Mario",12326483256,22,00302025,"ESO");
$aluno4 = $disciplina2->addAluno("Jorge",46532189651,20,00402025,"ESO");

$aluno1->addNota(9.5);
$aluno1->addNota(7.5);

$disciplina1->setProfessor($professor1);
$disciplina2->setProfessor($professor2);

echo $disciplina1->__tostring();

echo $disciplina1->calculaMediaTurma();






