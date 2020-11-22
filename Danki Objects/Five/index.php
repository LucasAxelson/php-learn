<?php

    include('interface.php');

    class teste implements interface1{

        public function PrintonScreen($par) {
            echo $par;
        }
    } 

    $teste = new teste;

    $teste->PrintonScreen('Ola mundo');
?>