<?php

class DatabasePDOConfiguration{

    private $connection;
    private $host = "localhost";
    private $username = "root";
    private $dbName = "rentacar";
    private $password = "";
    private $errors = array();
    private function createConnection(){
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password); //CONNECTION WITH DB CONFIG
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERROR AND EXCEPTION ENABLE
    }


    protected function getConnection(){
        $this->createConnection();
        return $this->connection;
    }


}



?>