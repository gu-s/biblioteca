<?php

class AutoreDal 
{
    
   private $hDB;
    
    public function __construct()    
    {        
        if(!is_resource($this->hDB))
            $this->hDB = DataManager::get_connection();
              
    }
    
    public function get_last_position($id=0)
    {
        $sql="Select max(posizione) as posizione from autore where id=$id";
        return mysql_query($sql);
    }
    
    //aggiunge autore
    public function add($id=0, $nome=0, $cognome=0, $data_nascita=0, $luogo_nascita=0, $vivente=0)
            {
        $this->get_last_position()+1;
        $sql="Insert into autore(id, nome, cognome, data_nascita, luogo_nascita, vivente)"
                ." values('$id','$nome','$cognome','$data_nascita', $luogo_nascita,$vivente";
       
        return mysql_query($sql);        
                    
            }
    
    //aggiorna autore
    public function update($id=0, $nome=0, $cognome=0, $data_nascita=0, $luogo_nascita=0, $vivente=0)
            {
        $sql="Update autore set id='$id', nome = '$nome', cognome = '$cognome', data_nascita = '$data_nascita', luogo_nascita = $luogo_nascita, vivente = $vivente
                .where id = $id"
                ;       
        return mysql_query($sql);
            }
            
    //cancella autore
        public function delete($id)
            {
                {            
            $sql= "Delete from autore where id=$id";
            return mysql_query($sql);
                }  
                    
            }
            
        public function getAll(){
        
        $sql="Select * from autore";
        $rs=  mysql_query($sql);
        
        $lista = Array();
        
        while($row= mysql_fetch_array($rs))
        {
           $lista[]=new Autore($row['id'],$row['nome'],
                   $row['cognome'],$row['data_nascita'],$row['luogo_nascita'],$row['vivente']);
        }
        
        return $lista;
        
    }
            
    public function stampa_elenco()
    {
            
            if(sizeof($this->getAll())==0)
                    $msg = "Nessun elemento trovato";
        else{
        $msg ="<table border='1'>";
        $msg .= "<tr><th>Id</th><th>Nome</th><th>Cognome</th><th>Data Nascita</th><th>Luogo Nascita</th><th>Vivente</th></tr>";
        
        foreach($this->getAll() as $value){
            $msg .= "<tr>";
            $msg .= "<td>".$value->id."</td>";
            $msg .= "<td>".$value->nome."</td>";
            $msg .= "<td>".$value->cognome."</td>";
            $msg .= "<td>".$value->data_nascita."</td>";
            $msg .= "<td>".$value->luogo_nascita."</td>";
            $msg .= "<td>".$value->vivente."</td>";
            $msg .="</tr>";
        }           
        $msg .="</table>";
        }
        return $msg;
            
    }
}
