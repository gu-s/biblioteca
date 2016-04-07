<?php

session_start();
if(isset($_SESSION['account'])){
    session_unset();    
    session_destroy();
        if(isset($_COOKIE['account']))
            setcookie ("account","",time()-3600);
   }

   
   header("location: index.php");
 ?>

