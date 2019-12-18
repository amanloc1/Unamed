<?php
    session_start();
    if (!isset($_SESSION['email'])) 
    {   
        header('location:/myweb/index.php'); 
    } 
    session_destroy();
    header('location: /myweb/index.php');
?>

