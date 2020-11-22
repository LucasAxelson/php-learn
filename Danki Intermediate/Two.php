<?php
    //Array single

    $arr = ['Lucas','Hubert'];
    $arr = array('Lucas','Key2'=>'Hubert');

    $arr[0] = 'Lucas';
    $arr[] = 'Hubert';
    
    // Array multidimensionais

//    $arr2 = array(array('Lucas','Hubert'),array(20,50));

//    $arr2[0] = array('Key1' => 'Lucas','Hubert');

    $arr2[0]['Key1'] = 'Lucas';
    
    echo $arr2 [0]['Key1'];

?>