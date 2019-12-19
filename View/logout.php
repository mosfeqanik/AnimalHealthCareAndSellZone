<?php
session_start();
session_unset();
//unset($_SESSION["nome"]);
header("Location: ../index.php");
?>