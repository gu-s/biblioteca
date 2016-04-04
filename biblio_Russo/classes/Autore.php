<?php

class Autore 
{
    
    private $id;
    private $nome;
    private $cognome;
    private $data_nascita;
    private $luogo_nascita;
    private $vivente;  
    
    
    function __construct($id=0, $nome=0, $cognome=0, $data_nascita=0, $luogo_nascita=0, $vivente=0) 
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->data_nascita = $data_nascita;
        $this->luogo_nascita = $luogo_nascita;
        $this->vivente = $vivente;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCognome() {
        return $this->cognome;
    }

    function getData_nascita() {
        return $this->data_nascita;
    }

    function getLuogo_nascita() {
        return $this->luogo_nascita;
    }

    function getVivente() {
        return $this->vivente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    function setData_nascita($data_nascita) {
        $this->data_nascita = $data_nascita;
    }

    function setLuogo_nascita($luogo_nascita) {
        $this->luogo_nascita = $luogo_nascita;
    }

    function setVivente($vivente) {
        $this->vivente = $vivente;
    }
    
    
    public function __get($property) {
       if(property_exists($this,$property))
            return $this->$property;
    }
       
    public function __set($property,$value){
        if(property_exists($this,$property))                
                $this->$property=$value;
    }
    
    public function __toString() 
    {
        return "Id: ".$this->id
                ."Id padre: ".$this->id_padre
                .", Nome: ".$this->nome
                .", Cognome: ".$this->cognome
                .", Data di nascita: ".$this->data_nascita
                .", Luogo di nascita: ".$this->luogo_nascita
                .", Vivente: ".$this->vivente                 
                ;
                
        
    }



    
}


