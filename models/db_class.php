<?php

class DataBase{
    protected function connect(){
        try{
            $db_host = "localhost";
            $db_username = "root";
            $db_password = "";
            $connection = new PDO("mysql:host=$db_host; dbname=digital_archival", $db_username, $db_password);
            
            return $connection;
            // Set the PDO error mode to exception
            // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die("ERROR: Could not connect. " . $e->getMessage());
        }
        
        $connection= null;
    }
}
?>