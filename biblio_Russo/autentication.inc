<?php

session_start();

if(isset($_COOKIE['account']))
    $_SESSION['account']=$_COOKIE['account'];

?>

