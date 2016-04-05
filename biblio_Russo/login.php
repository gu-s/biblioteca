<?php
$message="";
if(isset($_POST['login'])){
    
    $utente=$_POST['utente'];
    $pw=$_POST['pw'];
    //$rememberme=$_POST['rememberme'];
    
    //connessione al db
    $conn = mysql_connect("127.0.0.1","biblio","biblio25") or die("DBMS non trovato");
    mysql_select_db("bibliodb_russo") or die("Database non trovato");
    
    $query="Select * from admin where user='$utente' and password='$pw'";
    $rs=mysql_query($query);
    
    if(mysql_affected_rows()==0)
        $message="Dati non presenti";
    else{
        while($rows=  mysql_fetch_array($rs)){
            session_start();
            $_SESSION['account']=$rows['utente'];
            
            
            
            if($rows['user']=="biblio")
                    header("location: backoffice.php");
                else
                    header ("location: index.php");
        }
    }
    
    
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca Russo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/personale.css" rel="stylesheet">
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Biblioteca Russo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php include 'nav.php' ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <fieldset>
        <form action="#" method="post">
            <?php echo $message; ?>
            Utente: <input type="text" name="utente" required="">
            <br>
            Password: <input type="password" name="pw" required="">
            <br>            
            <input type="submit" name="login" value="Login">            
        </form> 
            <br>
            <?php echo $message; ?>
            Se non sei ancora registrato <a href="register.php"> Registrati </a>
            <br><br>
            
            <a href='password-recovery.php'>Recupera password</a> 
    </fieldset>
</body>

</html>

 <?php include 'footer.php' ?>