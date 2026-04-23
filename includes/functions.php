<?php

function matchpassword($password,$confirmPass){
if($password===$confirmPass){
    return true;
}else{
    return false;
}
}

function userChek($email,$conn){
try {
    $sql="SELECT * FROM users WHERE email=?";
    $stm=$conn->prepare($sql);
    $stm->execute([$email]);
    $user=$stm->fetch();
    if($user){
        return true;
    }else{
        return false;
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
}
function addUser($conn,$firstName,$lastName,$password,$email){
try {
    $sql="INSERT INTO users (firstname,lastname,email,password,role_id) values(?,?,?,?,?)";
    $stm=$conn->prepare($sql);
    $stm->execute([$firstName,$lastName,$email,$password,3]);
} catch (PDOException $e) {
    echo $e->getMessage();
}
}