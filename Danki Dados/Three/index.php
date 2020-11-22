<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id = 3;

//Sem o Where, aplicará para todas.
//$sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario',sobrenome='da Silva' WHERE id=$id");
//$sql = $pdo->prepare("UPDATE `clientes` SET nome='Lucas',sobrenome='Faustino' WHERE nome='James' AND sobrenome='Brooks'");
$sql = $pdo->prepare("UPDATE `clientes` SET nome='James',sobrenome='Brooks' WHERE nome='Mikkel' OR sobrenome='Faustino'");

if($sql->execute()) {
    echo 'Updated sucessfully.';
}
else {
    echo 'Update unsucesssful. Try again.';
}