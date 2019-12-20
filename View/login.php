<?php
include"../Src/Database.php";
session_start();

try {
    if(empty($_POST['email'])){
        throw new Exception("Email Connot be Empty");
    }

    if(empty($_POST['password'])){
        throw new Exception("Password Connot be Empty");
    }
    $login = new Database();
    if (isset($_POST["submit"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $status=$login->login($username,$password);
        if ($status==1) {
            session_start();
            $_SESSION['user']='true';
            header("location:../userProfile.php");
        }
    }
    else{
        $msg= "Check User ID and Password";
        $_SESSION['message']=$msg;
      header('location:../index.php');
    }


}

catch (Exception $e) {
    $meg = $e->getMessage();
    $_SESSION['message']=$meg;
    header('location:../index.php');
}

?>