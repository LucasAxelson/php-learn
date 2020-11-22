<?php

$numero1 = 10;
$numero2 = 20;

$employees = array('Lucas', 'Hubert', 'Chris','William');

if ($numero2 > $numero1) {
    echo 'Employees';
    echo '<br />';
    echo '<hr>';
}
else {
    die('Couldn\'t start process. Try again.');
}
for ($i=0; $i < count($employees); $i++) { 
    echo $employees[$i];
    echo '<br />';
    echo '<hr>';
}
?>