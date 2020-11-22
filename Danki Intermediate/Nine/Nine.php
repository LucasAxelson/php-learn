<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
      /*
      if(isset($_GET['Action'])){
        $name = @$_GET['Name'];
        $email = @$_GET['Email'];
        echo $name;
        echo '<br />';
        echo $email;
        }
    */
    if(isset($_POST['acao'])){
        $name = @$_POST['Name'];
        $email = @$_POST['Email'];
        echo $name;
        echo '<br />';
        echo $email;
        }
        ?>
    <form>
       <input type="text" name="Name" />
       <input type="text" name="Email" />
       <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>