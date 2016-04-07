<?php
    /**Classe che definisce la connessione al DBMS
     * 
     * 
     */
class  DataManager {
    //property
    
    
    public static function get_connection(){
        static $hDB;
        if(isset($hDB)){
            //echo "alert('Connessione gia attiva')";
            return $hDB;
        }
        else{
            $hDB=mysql_connect(HOST_DB,USER_DB,PW_DB);
            mysql_select_db(NAME_DB);
            return $hDB;            
        }
        
    }
    /*
    public static function close_connection(){
        if(is_resource($this->hDB))
            mysql_close();
        else
            throw new Exception ("No resource available");
                 
    }        
    */
}
