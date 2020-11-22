<?php
  class minhaClasse {
    const VALOR = 310;
    //You cannot change this value after defining it.
    public function __construct() {
        echo self::VALOR;
    }
}

echo minhaClasse::VALOR;
?>