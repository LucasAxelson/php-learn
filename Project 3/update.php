<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro em competição</title>
</head>
<body>
    <h1>Welcome to this year's annual swimming competition!</h1>
    <h3>Update the desired information.</h3>
    <form method="post">
        <label for="Search"> Search registry </label>
        <input type="search" /> 
        <input type="submit" name="submit" required />
    </form>
</body>
</html>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$name = $_POST["search"];

$sql = $pdo->prepare("UPDATE `swimming` SET nome='James',sobrenome='Brooks' WHERE name=$name);

if($sql->execute()) {
    echo 'Updated sucessfully.';
}
else {
    echo 'Update unsucesssful. Try again.';
}

?>