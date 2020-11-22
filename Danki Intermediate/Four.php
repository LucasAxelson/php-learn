<?php

    function mostrarNome($nome,$idade) {
        echo "<h2>Nome é: " .$nome. "<h2>";
        echo '<hr>';
        echo 'Idade: ' .$idade;
    }

    function calculadora($numero1 = 10,$numero2 = 5){
        echo $numero1 + $numero2;
    }

    function verdade() {
        return true;
    }
    function retornarString() {
        return 'Lucas';
    }

    echo retornarString();
    echo verdade();

    $variavel1 = verdade();
//    calculadora(20,30);
//    mostrarNome('Lucas',20);
?>