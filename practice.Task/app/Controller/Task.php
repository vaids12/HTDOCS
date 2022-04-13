<?php

class Task
{
    private static $conn;
    private static $table="task";

    public $id;
    public  $title;
    public $description;
    public $deadline;
    public $created;
    public $modified;

    public function __construct($db)
    {
        self::$conn = $db;
    }

    public function create()
    {
      
        $sql = "INSERT INTO ".self::$table." SET title=:title, description=:description, deadline=:deadline";
        $query = self::$conn->prepare($sql);

        //bind values 

        $query->bindParam(":title", $this->title);
        $query->bindParam(":description", $this->description);
        $query->bindParam(":deadline", $this->deadline);

        if ($query->execute()){
            return true;
        }else{
            return false;
        }

    }

    public static function index($db)
    {
        // prisidedam sujungima prie DB
        self::$conn = $db;
        //duomenu istraukimas
        $sql= "SELECT * FROM ".self::$table;
        $query = self::$conn->prepare($sql);
        $query->execute();
        $result=$query->fetchAll();
        //grazinam duomenu masyva
        return $result;     
    }

    public function update()
    {
        $sql= "UPDATE ".self::$table." SET
            title= :title,
            description= :description,
            deadline=:deadline
            WHERE id= :id";
        
        $query =self::$conn->prepare($sql);

        $query ->bindParam(':title', $this->title);
        $query ->bindParam(':description', $this->description);
        $query ->bindParam(':deadline', $this->deadline);
        $query ->bindParam(':id', $this->id);

        if( $query->execute()){
            return true;
        }else{
            return false;
        }
     

    }


    public  function getOne()
    {
        //gauname vieno iraso duomenis pagal id
        $sql = "SELECT * FROM ".self::$table." WHERE id= ".$this->id;
        $query = self::$conn->prepare($sql);
        $query->execute();
        $result= $query->fetch();

        //priskiriame duomenis savybems

        $this->title = $result['title'];
        $this->description = $result['description'];
        $this->deadline = $result['deadline'];

    }

    public  function delete()
    {
        $sql= "DELETE FROM  ".self::$table ." WHERE id= ".$this->id;
    
        $query =self::$conn->prepare($sql);

        if ($query->execute()){
            return true;
        }else{
            return false;
        }
    }



}




?>
