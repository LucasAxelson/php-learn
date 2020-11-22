<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id = 3;

//$sql = $pdo->prepare("DELETE FROM `clientes` WHERE nome='Lucas'");
$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=$id");

if($sql->execute()) {
    echo 'Deletion sucessful.';
}
else {
    echo 'Deletion unsucesssful. Try again.';
}