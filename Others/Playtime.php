<?php

$resultado = [];
$resultado[] = 'Aprovado';
$resultado[] = 'Reprovado';

//print_r($resultado)

$Nome = "Lucas Axelson";
$Idade = 20;
$Sexo = "Masculino";
$Nota = 7;

//var_dump($Nome);
//var_dump($Sexo);
//var_dump($Idade);

if($Nota >= 6 && $Nota <= 10) 
    for($i=0 ; $i <= count($resultado) ; $i++)
    {
        if($resultado[$i] == 'Aprovado') 
            Echo " O aluno " .$Nome. " foi " .$resultado. " com nota final de " .$Nota;
    }          
?>