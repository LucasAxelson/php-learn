<?php
/*
//Starts session, which saves users information.
session_start();
//Defines session values
    $_SESSION['Name'] = 'Lucas'; 
    if(isset($_SESSION['Name'])); {
    echo $_SESSION['Name'];
    }

//  session_destroy()
//  Cancels your defined session.

*/

//How to set a Cookie
session_start();
//Creates cookie
setcookie('Name','Lucas',time() + (60*60*24),'/');
//Deletes cookie
//setcookie('Name','Lucas',time() - (60*60*24),'/');

echo $_COOKIE['Name'];
?>