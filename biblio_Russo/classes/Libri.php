<?php


class Libri {
    private $codice_libro,$fkAutore,$fkEditore;
    private $titolo;
    private $numero_pagine;
    private $prezzo;
    private $data_di_acquisto;
    
    private $handle;
    
    function __construct($codice_libro=0, $fkAutore=0, $fkEditore=0, $titolo="", $numero_pagine=0, $prezzo=0.0, $data_acquisto='') {
        $this->codice_libro = $codice_libro;
        $this->fkAutore = $fkAutore;
        $this->fkEditore = $fkEditore;
        $this->titolo = $titolo;
        $this->numero_pagine = $numero_pagine;
        $this->prezzo = $prezzo;
        $this->data_di_acquisto = $data_acquisto;
        
        /*----*/
        $this->hDB=mysql_connect(HOST_DB,USER_DB,PW_DB);
        mysql_select_db(NAME_DB);
    }
    public function getCodice_libro() {
        return $this->codice_libro;
    }
    public function getFkAutore() {
        return $this->fkAutore;
    }
    public function getFkEditore() {
        return $this->fkEditore;
    }
    public function getTitolo() {
        return $this->titolo;
    }
    public function getNumero_pagine() {
        return $this->numero_pagine;
    }
    public function getPrezzo() {
        return $this->prezzo;
    }
    public function getData_di_acquisto() {
        return $this->data_di_acquisto;
    }
    public function setCodice_libro($codice_libro) {
        $this->codice_libro = $codice_libro;
    }
    public function setFkAutore($fkAutore) {
        $this->fkAutore = $fkAutore;
    }
    public function setFkEditore($fkEditore) {
        $this->fkEditore = $fkEditore;
    }
    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }
    public function setNumero_pagine($numero_pagine) {
        $this->numero_pagine = $numero_pagine;
    }
    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }
    public function setData_di_acquisto($data_acquisto) {
        $this->data_di_acquisto = $data_acquisto;
    }
    public function __get($property) {
        if(property_exists($this,$property))
            return $this->$property;
    }
    public function __set($property, $value) {
        if(property_exists($this,$property))
            $this->$property=$value;
    }
    public function __toString() {
        
    }
    function getAll(){
         $sql="Select *  from libri";
         
         return $this->get($sql);
        
    }
    function get($sql){
         
         $rs=  mysql_query($sql);
         $lista= Array();         
         
         while ($row= mysql_fetch_array($rs)){
             
             $lista[]=new libri($row['codice_libro'], $row['autore'],$row['editore'], 
                     $row['titolo'],$row['numero_pagine'],
                     $row['prezzo'],$row['data_acquisto']);         
             
             
         }
          
         // mysql_close($handle);
          return $lista;        
        
    }
    public function stampa_elenco(){
         $msg="<table border=1>";
         $msg .="<tr><th>Codice Isbn</th>"
                 . "<th>Autore</th>"
                 . "<th>Editore</th>"
                 . "<th>Titolo</th>"
                  . "<th>Numero Pagine</th>"
                 . "<th>Prezzo</th>"
                 . "<th>Data d'acquisto</th>"
                 . "</tr>";
         foreach (self::getAll() as $obj){
            $msg.="<tr>"
                    ."<td>".$obj->codice_libro."</td>"
                    ."<td>".$obj->fkAutore."</td>"
                    ."<td>".$obj->fkEditore."</td>"
                    ."<td>".$obj->titolo."</td>"
                    ."<td>".$obj->numero_pagine."</td>"
                    ."<td>".$obj->prezzo."</td>"
                    ."<td>".$obj->data_acquisto."</td>"
                    
                 . "</tr>";
         }           
             
             
         $msg .="</table>";
         return $msg;
     }
    
    
}
?>