<?php

$message="";
if(isset($_POST['login'])){
    
    $utente=$_POST['utente'];
    $pw=$_POST['pw'];
    //$rememberme=$_POST['rememberme'];
    
    //connessione al db
    $conn = mysql_connect("127.0.0.1","biblio","biblio25") or die("DBMS non trovato");
    mysql_select_db("bibliodb_dulanto") or die("Database non trovato");
    
    $query="Select * from admin where utente='$utente' and password='$pw'";
    $rs=mysql_query($query);
    
    if(mysql_affected_rows()==0)
        $message="Dati non presenti";
    else{
        while($rows=  mysql_fetch_array($rs)){
            session_start();
            $_SESSION['account']=$rows['utente'];
            
            
            
            if($rows['utente']=="admin")
                    header("location: backoffice.php");
                else
                    header ("location: index.php");
        }
    }
    
    
    
}


?>


      
<form action="#" method="post">
            <?php echo $message; ?>
            utente: <input type="text" name="utente" required="">
            <br>
            password: <input type="password" name="pw" required="">
            <br>            
            <input type="submit" name="login" value="login">            
        </form> 
            <br>
            
            <a href='password-recovery.php'>Recupera password</a> 
            
        