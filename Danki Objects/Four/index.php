<?php

abstract class Teste {

    public function funcl() {
        echo 'Function 1';
    }

    abstract function func2();
}

class principal2 {
    public static function otherestatic() {
        echo 'Otherestatic';
    }
}


class principal extends Teste {

    public function func2() {
        echo 'Declaring abstract method';
    }
    public static function metodoestatico() {
        echo 'metodo estatico';
    }
    public function funcao() {
        //principal::metodoestatico();
        principal2::otherestatic();
        //self::metodoestatico();
    }
}  

$principal = new principal;
$principal->funcao();
//principal::metodoestatico();
//$principal->funcl();
//$principal->func2();
?>