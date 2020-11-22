<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro em competição</title>
</head>
<body>
    <h1>Welcome to this year's annual swimming competition!</h1>
    <h3>Insert your desired information below to enter.</h3>
    <form method="post">
        <label for="Insert"> Add candidate</label> 
        <input type="checkbox" name="Insert" /> <br>
        <label for="Update"> Update candidate's information.</label> 
        <input type="checkbox" name="Update" /> <br>
        <label for="Delete"> Delete candidate.</label> 
        <input type="checkbox" name="Delete" /> <br>
        <input type="submit" name="submit" required />
    </form>
</body>
</html>

<?php
if(@$_POST["Insert"]) {
    include('insert.php');
}
elseif(@$_POST["Update"]) {
    include('update.php');
}
elseif(@$_POST["Delete"]) {
    include('delete.php');
}

?>