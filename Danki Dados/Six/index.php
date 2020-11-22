<?php

$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY id DESC LIMIT 4");
#DESC inverts the order.
$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 2,3");
$sql->execute();
$clientes = $sql->fetchAll();
foreach ($clientes as $key => $value) 
{
    echo $value['nome'];
    echo '<hr>';
}


?>