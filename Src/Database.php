<?php
class Database{
    public $conn;
    
    public function __construct()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=animalcaredatabase","root","");
        $this->conn=$pdo;
    }

    //registration method
    public function register($usertype,
        $username,
        $email,
        $name,
        $gender,
        $profession,
        $contractnumber,
        $location,
        $about,
        $password)
    {
        $password=md5($password);
        $registration_query="INSERT INTO users (usertype,
                                                username,
                                                email,
                                                name,
                                                gender, 
                                                password,
                                                profession,
                                                contractnumber,
                                                location,
                                                about)
            VALUES (:usertype,
                    :username,
                    :email,
                    :name,
                    :gender, 
                    :password,
                    :profession,
                    :contractnumber,
                    :location,
                    :about)";
        $statement=$this->conn->prepare($registration_query);
        $statement->execute
    (
        array
        (
            ":usertype"         =>  $usertype,
            ":username"         =>  $username,
            ":email"            =>  $email,
            ":name"             =>  $name,
            ":gender"           =>  $gender,
            ":password"         =>  $password,
            ":profession"       =>  $profession,
            ":contractnumber"   =>  $contractnumber,
            ":location"         =>  $location,
            ":about"            =>  $about,     
        )
    );
    }


}


?>