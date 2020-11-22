<?php

//    $name = 'Lucas';

  /*  //If alternative
    switch($name) {
        case 'Lucas':
            echo  'Variable is Lucas';
            break;
        case 'John':
            echo 'Variable is John';
            break;
    }


//Break is for loops like "for, while, do, foreach and switch."

//For alternative
for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo '<hr>';
    if($i == 5)
        break; //Break pauses the code. Observe.
}


$var = false;

if($var == false)
    $name = 'Lucas'; //Needs {} 'chaves' to count > 1 variables.

$idade = 23;

echo $idade;
echo '<br />';
echo $name;
*/

//Continue used for loops: for, while, do and foreach
for ($i=0; $i < 10; $i++) { 
    if($i == 5 || $i == 9)
        continue;
    echo $i;
    echo '<hr>';
}
?>