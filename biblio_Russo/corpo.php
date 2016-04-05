
<?php
include './autentication.inc';
include './config.php';
include './classes/Autore.php';
include './classes/AutoreDal.php';
include './classes/DataManager.php';
include './classes/Editore.php';
include './classes/Libri.php';

?>

<h1>Benvenuto nella biblioteca online</h1>
<div background="./css/biblioteca.jpg"
<form action="index.php?=" method="post">
    <div class="form-horizontal">
    ordina per:
    <input type="submit" name="btn-anno" value="anno di acquisto">
    <input type="submit" name="btn-anno_decrescente" value="anno di acquisto decrescente">
    </div> 
    
    <div class="form-horizontal">
    Cerca per:
    <input type="submit" name="btn-autore" value="autore">
    <input type="submit" name="btn-editore" value="editore">
    </div>
</form>
<h2>Elenco Libri</h2>
   <?php
                
                $libro=new libri();
                echo $libro->stampa_elenco();
                $autore = new AutoreDal();
                echo $autore->stampa_elenco();
                   ?>
</div> 
          

