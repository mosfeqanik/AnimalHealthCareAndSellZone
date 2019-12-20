<?php
include '../Src/Database.php';
session_start();
$register = new Database();
    try {
        if (empty($_POST['username'])) {
            throw new Exception("User Name Connot be Empty");
        }
        if (empty($_POST['email'])) {
            throw new Exception("Email Connot be Empty");
        }
        if (empty($_POST['p'])) {
            throw new Exception("Password 1st Field Connot be Empty");
        }
        if (empty($_POST['c'])) {
            throw new Exception("Password 2nd Field Connot be Empty");
        }
        $pass1 = $_POST['p'];
        $pass2 = $_POST['c'];
        if ($pass1 == $pass2) {
            $password = $pass1;
            if (isset($_POST["submit"])) {

                $usertype   =   $_POST['usertype'];
                $username   =   $_POST['username'];
                $email      =   $_POST['email'];
                $name       =   $_POST['name'];
                $gender     =   $_POST['gender'];
                $profession   =   $_POST['profession'];
                $contractnumber =   $_POST['contractnumber'];
                $location   =   $_POST['location'];
                $password;
                $register->register($usertype,$username,$email,$name,$gender,$profession,$contractnumber,$location,$password);

        }

        } else {
            throw new Exception("Password Do't Match");
        }
        



        

        
    } catch (Exception $e) {
        $msg = $e->getMessage();
        $_SESSION['message'] = $msg;
        header('location:../index.php');
    }
