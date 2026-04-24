<?php 
   session_start() ;
   if(!isset($_SESSION['email'])){
    header('location: ../index.php');
    exit();

   }
   $email=$_SESSION['email'];
   require "../includes/dbh.inc.php";
   $connct = ConnectionDb();
   $sql="SELECT firstname FROM users WHERE email =? ;";
   $stm=$connct->prepare($sql);
   $stm->execute([$email]);
   $nameUser=$stm->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $nameUser["firstname"];?></h1>
    <a href="../scripts/logout.php">log out</a>
</body>
</html>