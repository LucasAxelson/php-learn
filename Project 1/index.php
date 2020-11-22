<?php
    include ('header.php');

    $List = array('Tomate Juice','Pasta','Olives','Italian Tomatoes','Parsley','Garlic','Onion');

    $total = count($List);

    for ($i=0; $i < $total; $i++) { 
        echo $List[$i];
        echo '<br />';
        echo '<hr>';
    }

    echo '<br />';

    include('footer.php');
    ?>