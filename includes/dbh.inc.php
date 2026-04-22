<?php

$serverName = "localhost";
$dataBaseName = "edu_sync";
$dbUserName = "root";
$dbpassword = "";
$conn = mysqli_connect($serverName, $dbUserName ,$dbpassword, $dataBaseName );

if(!$conn){
    die("Connection failed : " . mysqli_connect_error());
}





?>