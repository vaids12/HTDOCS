<?php

class Database
{
    //Prisijungimo duomenys
    private $host ="localhost";
    private $dbName="users";
    private $username="root";
    private $password= "";
    public $conn;

    public function getConnection()// prisijungimas prie DB
    {
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->username, $this->password); 
            // echo "connected";           
        }catch(PDOExeption $e){
            echo "Conection failed: ".$e->getMessage();
        }

        return $this->conn;
    }
}