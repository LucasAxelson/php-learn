<?php
    //Dates
/*
    $datami = '05/11/2020'; // Manual insert
    $datelo = date('d/m/Y'); // 05/11/2020
    $datesh = date('d/m/y'); // 05/11/20
    // Shows date & time, w/o correct time zone.
    $datewotz = date('d/m/Y H:i:s'); // 05/11/2020 20:01:43 
    $date = date('d/m/Y H:i:s',time()+(60*10)); +10 minutes
 
    //Sets timezone 'America/Sao_Paulo'
    date_default_timezone_set('America/Sao_Paulo');    
    
    $date = date('d/m/Y H:i:s');

    echo $date;
 */
    $titulo_site = 'Title of my site';
    include ('header.php');
?>

<h1> My homepage! </h1> 

<?php
    include('footer.php');
?>