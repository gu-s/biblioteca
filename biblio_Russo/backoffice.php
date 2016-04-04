<?php
/*$newURL="index.php?bkoff=1";
header('Location: '.$newURL);*/
?>
<?php
        //include 'my_library.php';
        if(isset($_POST['Invio'])){
            $nome=$_POST['nome'];
            $cognome = $_POST['cognome'];
            $data =  $_POST['data'];
            $luogo = $_POST['luogo'];
            $vivo=0;
            /*if(isset($_POST['vivo']))
                $vivo=1;*/
                    
            $format="Y-m-d";
            //$data=date_format($data, $format);
            if(empty($nome) || empty($cognome || empty($data)) || empty($luogo) ){
                echo "<br>Dati mancanti";
            }
            else{                
                
                
                     $conn = mysql_connect("127.0.0.1","biblio","biblio25")
                        or die("DBMS non disponibile");
                     mysql_select_db("bibliodb_dulanto")
                        or die("DBMS non disponibile");
                    $query="INSERT INTO autori("
                    . "id,nome,cognome,data_di_nascita,luogo_di_nascita,vivente) ";
                    $query.= "VALUES(NULL,'$nome','$cognome','$data','$luogo',)";
                    $rows=mysql_query($query,$conn)
                        or die("Errori in tabella");
                    if($rows>0){
                        echo "<br>Registrazione avvenuto correttamente!!<br>";
                        echo '<a href="index.php">Vai alla Home!</a>';
                    }
                    else
                        echo "<br>inserimento fallito!!";
                    
                
            }
        }
        //else{
        ?>
<form action="backoffice.php?=1" method="post">
            
            Nome: <input type="text" name="nome" required>
            <br>
            Cognome: <input type="text" name="cognome" required>
            <br>
            Data di Nascita<input type="text" name="data" required>
            <br>
            Luogo di Nascita<input type="text" name="luogo" required>
            <br>
            Vivente:<input type="checkbox" name="vivo">
            <br>
            <input type="reset" name="cancella" value="cancella">            
            <input type="submit" name="Invio" value="Invio"> 
</form>