<?php
// server-side
include '../PhpProject1/Funzioni/my_library.php';

if(isset($_POST['invia'])){

$user=$_POST['username'];
$pw = $_POST['password'];

$error = array();

if(empty($user))
    $error[] = "User campo obbligatorio!";
if(empty($pw))
    $error[] = "Password campo obbligatorio!";

if(count($error)>0)
    echo "Si sono verificati i seguenti errori:<br>"
    .stampa_array($error);
else
{
$server="localhost";
$username="root";
$password="";
$database_name="bibliodb_russo";

//connessione al database
$conn = mysql_connect($server, $username, $password) or die("Connesione non riuscita");
mysql_selectdb($database_name, $conn) or die("Database non trovato");
$query="SELECT * from admin where ((username = $user) && (password = $pw )" ;
        
$rs=mysql_query($query,$conn) or die("Login fallito");
echo "<br>Login effettuato"; 
mysql_close($conn);
}

}else {
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    <form action="Login.php" method="post">
        <fieldset>
            <legend> <h1> Login Biblioteca </h1> </legend>
        User: <input type="text" name="username" required>
        <br>
        Password: <input type="text" name="password" required>
        <br>
        <input type="submit" value="invia" name="invia">
        </fieldset>
    </form>
    </body>
</html>

<?php

}

?>
