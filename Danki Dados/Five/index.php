<?php

  $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
/*
  $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2");
//  $sql = $pdo->prepare("SELECT * FROM posts");

  $sql->execute(array($_GET['categoria_id']));

  $info = $sql->fetchAll();


    #For works the same as Foreach.
/*
    for ($i=0; $i < count($info); $i++) { 
        echo 'Titulo: '.$info[$i]['titulo'];
        echo '<br>';
        echo 'Noticia: '.$info[$i]['conteudo'];
        echo '<hr>';    

    }

*/
    #Foreach shows the information in presentable manner.

/*
    foreach ($info as $key => $value) {
    echo 'Titulo: '.$value['titulo'];
    echo '<br>';
    echo 'Noticia: '.$value['conteudo'];
    echo '<hr>';    
}
*/

    #Ugly look, shows each of the arrays.
/*
    echo '<pre>';
    print_r($info);
    echo '</pre>';
*/
/*
$sql = $pdo->prepare("SELECT * FROM categorias");

$sql->execute();

$info = $sql->fetchAll();

foreach ($info as $key => $value) {
    $categoria_id = $value['id'];
    echo 'Exibindo posts de: '.$value['nome'];
    echo '<br/>';
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
    $sql->execute();
    $infoPosts = $sql->fetchAll();
    foreach ($infoPosts as $key => $value) {
        echo 'Titulo: '.$value['titulo'];
        echo '<br>';
        echo 'Noticia: '.$value['conteudo'];
        echo '<hr>';    
    }
}
*/

#Organizes the data bank. "INNER JOIN"
#    $sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts`. `categoria_id` = `categorias`.`id`");
    $sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`. `categoria_id` = `categorias`.`id`");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
#    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
#removes index numbers. 

    echo '<pre>';
    print_r($info);
    echo '<pre>;'
    #echo print_r($info[3]['nome'])

?>