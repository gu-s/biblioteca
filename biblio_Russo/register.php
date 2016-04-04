<?php
// server-side
include '../PhpProject1/Funzioni/my_library.php';

if(isset($_POST['invia'])){

$email=$_POST['email'];
$pw = $_POST['password'];
$cpw = $_POST['conferma_password'];


$error = array();

if(empty($email))
    $error[] = "Email campo obbligatorio!";

if(empty($pw))
    $error[] = "Password campo obbligatorio!";

if(empty($cpw) || ($pw != $cpw))
    $error[] = "Le password non coincidono!";;

if(count($error)>0)
    echo "Si sono verificati i seguenti errori:<br>"
    .stampa_array($error);
else
{
$server="localhost";
$username="biblio";
$password="biblio25";
$database_name="bibliodb_russo";

//connessione al database
$conn = mysql_connect($server, $username, $password) or die("Connesione non riuscita");
mysql_selectdb($database_name, $conn) or die("Database non trovato");
$query="INSERT INTO account(email,password,data,idruolo)"
        ." values('$email','$pw',CURRENT_TIMESTAMP,2)"; //proiezione
$rs=mysql_query($query,$conn) or die("inserimento fallito");

if ($rs > 0)
    echo "<br>Inserimento riuscito";
else 
    echo "Dati non validi";
mysql_close($conn);
}

}else {
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registrazione </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <form action="register.php" method="post">
            
        <fieldset>
            <legend>Modulo di registrazione</legend>
        email: <input type="text" name="email" required>
        <br>
        password: <input type="text" name="password" required>
        <br>
        conferma password: <input type="text" name="conferma password" required>
        <br>        
        <input type="submit" value="invia" name="invia">
        <input type="reset"  value="cancella" name="cancella">
        </fieldset>
            
    </form>
    </body>
</html>

<?php

}

?>


