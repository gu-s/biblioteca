<?php

class DataManager 
{
    //proprietà
    
    public static function get_connection()
    {
        static $hDB;
        if(isset($hDB)){
            //echo "alert('Connessione già attiva')";
            return $hDB;
        }
        $hDB = mysql_connect(HOST_DB,USER_DB,PW_DB);
        mysql_select_db(NAME_DB);
        return $hDB;
    }  
    
    
    
}
