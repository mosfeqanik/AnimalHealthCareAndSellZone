<?php
require_once("../Src/User.php");
$data= array();
session_start();

try {
    if(empty($_POST['username'])){
        throw new Exception("Day Name Connot be Empty");
    }

    if(empty($_POST['password'])){
        throw new Exception("Day Short Name Connot be Empty");
    }
    $data['user'] = $_POST['username'];
    $data['password'] = $_POST['password'];


    $obj = new User();
    $obj->setData($data);
    $test=$obj->loginProcess();

    if($test>0){
        session_start();
        $_SESSION['name']="admin";
        header('location:../medicare.php');
    }
    else{
        $meg= "Check User ID and Password";
        $_SESSION['message']=$meg;
      header('location:../index.php');
    }


}

catch (Exception $e) {
    $meg = $e->getMessage();
    $_SESSION['message']=$meg;
    header('location:../index.php');
}

?>