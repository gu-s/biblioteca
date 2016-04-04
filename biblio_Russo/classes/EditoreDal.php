<?php

class EditoreDal 
{
    
   private $hDB;
    
    public function __construct()    
    {        
        if(!is_resource($this->hDB))
            $this->hDB = DataManager::get_connection();
              
    }
    
    public function get_last_position($id=0)
    {
        $sql="Select max(posizione) as posizione from editore where id=$id";
        return mysql_query($sql);
    }
    
    //aggiunge editore
    public function add($id=0, $nome=0, $citta=0)
            {
        $this->get_last_position()+1;
        $sql="Insert into editore(id, nome, citta)"
                ." values('$id','$nome','$citta')";
       
        return mysql_query($sql);        
                    
            }
    
    //aggiorna editore
    public function update($id=0, $nome=0, $citta=0)
            {
        $sql="Update editore set id='$id', nome = '$nome', citta = '$citta'
                .where id = $id"
                ;       
        return mysql_query($sql);
            }
            
    //cancella editore
        public function delete($id)
            {
                {            
            $sql= "Delete from editore where id=$id";
            return mysql_query($sql);
                }  
                    
            }
            
        public function getAll(){
        
        $sql="Select * from editore";
        $rs=  mysql_query($sql);
        
        $lista = Array();
        
        while($row= mysql_fetch_array($rs))
        {
           $lista[]=new Autore($row['id'],$row['nome'],
                   $row['citta']);
        }
        
        return $lista;
        
    }
            
    public function stampa_elenco()
    {
            
            if(sizeof($this->getAll())==0)
                    $msg = "Nessun elemento trovato";
        else{
        $msg ="<table border='1'>";
        $msg .= "<tr><th>Id</th><th>Nome</th><th>Città</th></tr>";
        
        foreach($this->getAll() as $value){
            $msg .= "<tr>";
            $msg .= "<td>".$value->id."</td>";
            $msg .= "<td>".$value->nome."</td>";
            $msg .= "<td>".$value->citta."</td>";           
            $msg .="</tr>";
        }           
        $msg .="</table>";
        }
        return $msg;
            
    }
}

