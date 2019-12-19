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
        $password)
    {
        try{
            $password=md5($password);
            $registration_query="INSERT INTO users (usertype,
                                                username,
                                                email,
                                                name,
                                                gender, 
                                                password,
                                                profession,
                                                contractnumber,
                                                location)
            VALUES (:usertype,
                    :username,
                    :email,
                    :name,
                    :gender, 
                    :password,
                    :profession,
                    :contractnumber,
                    :location)";
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
                    ":location"         =>  $location
                )
            );
            if ($statement) {
                session_start();
                $_SESSION['message'] = "Successfully Added";
                echo $_SESSION['message'];

                header('location:../index.php');
            } else {
                $_SESSION['message'] = "Couldn't store , try again";
                echo $_SESSION['message'];
                header('location:../index.php');
            }
        }catch (PDOException $e) {
            $msg = $e->getMessage();
            if(isset($meg)){

                $_SESSION['message'] = $msg;
                $_SESSION['message'];
                header('location:../index.php');
            }
        }
    }


}


?>