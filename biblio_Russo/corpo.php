<?php
include './classes/libri.php';
include './classes/DataManager.php';
include './classes/AutoreDal.php';
include './classes/Autore.php';
include './classes/Editore.php';
include './classes/EditoreDal.php';




?>

<form action="index.php?=" method="post">
    <div id="ordina" class="form-horizontal">
    ordina per:
    <input type="button" name="btn-anno" value="anno di acquisto">
    <input type="button" name="btn-anno_decrescente" value="anno di acquisto decrescente">
    </div> 
    
    <div id="cerca" class="form-horizontal">
    Cerca per:
    <input type="button" name="btn-autore" value="autore">
    <input type="button" name="btn-editore" value="editore">
    </div>
</form>
<h2>Elenco Libri</h2>
   <?php
                
                $libro=new libri();
                echo $libro->stampa_elenco();
                $autore=new AutoreDal();
                echo $autore->stampa_elenco();
                $editore=new EditoreDal();
                echo $editore->stampa_elenco();
                
                    
            ?>
   