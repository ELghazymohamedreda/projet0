<?php
$connect =  mysqli_connect('localhost','Root','','Lavage');

class LavageesManager{

    private $first_name;
    private $last_name;
    private $age;
    private $occupation;
    private $salary;
    private $matricule;

    public function __construct($first_name,$last_name,$age,$occupation,$salary,$matricule){
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->age=$age;
        $this->occupation=$occupation;
        $this->salary=$salary;
        $this->matricule=$matricule;
    }

    public function insertLavage($connect){
        $first_name = $connect->real_escape_string($this->first_name);
        $last_name = $connect->real_escape_string($this->last_name);
        $age = $connect->real_escape_string($this->age);
        $occupation = $connect->real_escape_string($this->occupation);
        $salary = $connect->real_escape_string($this->salary);
        $matricule = $connect->real_escape_string($this->matricule);
        $sql = "INSERT INTO `Client`(`first_name`, `last_name`, `age`, `occupation`, `salary`, `matricule`)VALUES('$first_name','$last_name','$age','$occupation','$salary','$matricule')";
        $query = $connect->query($sql);
        return $query;

    }
     
}

class lavageEdit{

    private $first_name;
    private $last_name;
    private $age;
    private $occupation;
    private $salary;
    private $matricule;
    private $id;

    public function __construct($first_name,$last_name,$age,$occupation,$salary,$matricule,$id){
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->age=$age;
        $this->occupation=$occupation;
        $this->salary=$salary;
        $this->matricule=$matricule;
    }

    public function LavageUpdate($connect){
        $first_name = $connect->real_escape_string($this->first_name);
        $last_name = $connect->real_escape_string($this->last_name);
        $age = $connect->real_escape_string($this->age);
        $occupation = $connect->real_escape_string($this->occupation);
        $salary = $connect->real_escape_string($this->salary);
        $matricule = $connect->real_escape_string($this->matricule);
        $id = $this->id;

        $sql = "UPDATE `Client` SET `first_name`='$first_name',`last_name`='$last_name',`age`='$age',`occupation`='$occupation',`salary`='$salary',`matricule`='$matricule' WHERE ID='$id'";
        $query = $connect->query($sql);
        return $query;

    }
     
}

class display_client{

    public function displayClient($connect){
        
        $sql = "SELECT * FROM client";
        $query = $connect->query($sql);
        return $query;

    }
}



?>