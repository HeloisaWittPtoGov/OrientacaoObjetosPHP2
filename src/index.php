<?php

require_once "pessoa.php";
require_once "aluno.php";
require_once "professor.php";
require_once "disciplina.php";

$disciplina1 = new Disciplina("Matemática", 20);

$professor1 = new Professor("Lucas",1236549856,40,"Mestrado Matematica");
$professor2 = new Professor("Ana",3214569856,40,"Mestrado Fisica");

$disciplina1->addAluno("Heloisa",09546281956,20,00102025,"ESO");
$disciplina1->addAluno("Maria",50926481956,20,00202025,"ESO");

$disciplina1->addProfessor($professor1);


