<?php
    include('exemplo.class.php'); //Object
    
    $example = new Example();
    $example->setVar1('Lucas');
    echo $example->pegaVar1();

    $example2 = new Example;
    $example2->setVar1('John');
    echo $example2->pegaVar1();

    //    $example->var2 = 'Lucas';
/*
    echo $example->var2; //Atributes

    $example2 = new Example;

    $example2->var2 = 'John'; //Atributes

    echo '<br />';
    echo $example2->var2;
    echo '<br />';
   echo Example::$var3;
*/
?>