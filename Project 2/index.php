<?php
include('Lucas.class.php');

$Strength = new Lucas;
$Strength->setVar1('Strength: Average');
#echo $Strength->takeVar1();

$Agility = new Lucas;
$Agility->setVar1('Agility: Low');
#echo $Agility->takeVar1();

$Character = array('Lucas',$Strength->takeVar1(),$Agility->takeVar1());

for ($i=0; $i < count($Character); $i++) { 
    echo $Character[$i];
    echo '<br />';
    echo '<hr>';
}
?>