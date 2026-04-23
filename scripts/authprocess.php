<?php

if(isset($_POST["singup"])){
    require "../includes/dbh.inc.php";
$conn=ConnectionDb();
   $firstName= htmlentities( $_POST["first_name"]);
    $lastName= htmlentities($_POST["last_name"]) ;
    $password= htmlentities($_POST["password"]);
    $confirmPass=  htmlentities( $_POST["confirm_password"]);
    $email= htmlentities($_POST["email"]) ;
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
    header("Location:../public/dashboard.php");

}