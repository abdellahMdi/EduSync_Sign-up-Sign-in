<?php

if(isset($_POST["singup"])){
    require "dbh.inc.php";
$conn=ConnectionDb();
    $firstName=$_POST["first_name"];
    $lastName=$_POST["last_name"];
    $password=$_POST["password"];
    $confirmPass=$_POST["confirm_password"];
    $email=$_POST["email"];
    $phoneNumber=$_POST["txtEmpPhone"];
    require "../includes/functions.php";
    if(matchpassword($password,$confirmPass)==false){
        header("Location:../index.php?err=matchp");
        exit();
    }
    if(userChek($email,$conn)){
     header("Location:../index.php?err=exist");
        exit();   
    }
    addUser($conn,$firstName,$lastName,$password,$email);
    echo "sucess";

}