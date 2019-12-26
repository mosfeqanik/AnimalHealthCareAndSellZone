<?php

include 'Src/Database.php';
$del = new Database();
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $result=$del->Delete($id);
    header( "location:PostandCommentViewMedicare.php");

}


?>