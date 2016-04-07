<?php
class Editore 
{
    
    private $id;
    private $nome;
    private $citta;
        
    function __construct($id, $nome, $citta) {
        $this->id = $id;
        $this->nome = $nome;
        $this->citta = $citta;
    }
    
    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getCitta() {
        return $this->citta;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setCitta($citta) {
        $this->citta = $citta;
    }
    //get e set
    public function __get($property) {
       if(property_exists($this,$property))
            return $this->$property;
    }
       
    public function __set($property,$value){
        if(property_exists($this,$property))                
                $this->$property=$value;
    }
    
    public function __toString() {
        
    }
    
    
    
    
}
