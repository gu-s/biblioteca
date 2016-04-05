<?php
session_start();

if(isset($_SESSION['account'])) 
{
    
//azzero la session
session_unset();

//elimino la sessione
session_destroy();
    
}
if(isset($_COOKIE ['account']))
{
    setcookie ("account","",time()-3600);
}

header("location: index.php");


