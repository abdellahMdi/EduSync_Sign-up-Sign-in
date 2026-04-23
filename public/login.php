<?php
session_start();
if(isset($_POST["login"])){
    require "../includes/functions.php";
    require "../includes/dbh.inc.php";
    $conn=ConnectionDb();
    $email = htmlentities($_POST["email"]);
    $_SESSION['email']=$email;
    $password = htmlentities($_POST["password"]);
    if(connectAcount($conn,$email,$password)){
        header("Location:dashboard.php");
        exit();
    }else{
        header("Location:../index.php?err=passemail");
        exit();
    }
}