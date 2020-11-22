<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro em competição</title>
</head>
<body>
    <h3>Insert your desired information below to enter.</h3>
    <form method="post">
        <input type="text" name="Name" required />
        <input type="text" name="Surname" required />
        <input type="text" name="Age" required />
        <input type="submit" name='Action' required />
    </form>
</body>
</html>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

if(isset($_POST['Action'])) {
    $name=$_POST["Name"];
    $surname=$_POST["Surname"];
    $age=$_POST["Age"];

    $sql = $pdo->prepare("INSERT INTO `swimming` VALUES(NULL,?,?,?)");

    $sql->execute(array($name,$surname,$age)) ;  
    echo 'You have been sucessfully added to this year\'s swimming competition';
}

?>