<?php

class Pessoa{
    //Objeto Pessoa

    private $name = 'Lucas';
    private $age = 20;
    private $weight = '67kg';

    public function crescer() {
        $this->comer();
        echo '<br />';
        echo 'Im growin';

    }

    private function comer() {
        echo 'Eatin.';

    }
}

$pessoa = new Pessoa;
$pessoa2 = new Pessoa;

$pessoa->crescer();
?>