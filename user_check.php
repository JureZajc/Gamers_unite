<?php

include_once './database.php';


$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$username = $_POST['username'];

if ((!empty($username))&&
        (!empty($email))&&(!empty($pass1))&&($pass1 == $pass2)) {
    //geslu dodam "začimbo"
    $pass1 = $salt.$pass1;
    //geslo zakodiram
    $pass1 = sha1($pass1);
    $query = sprintf("INSERT INTO users (username, email, pass) "
            . " VALUES('%s','%s', '$pass1')", 
            mysqli_real_escape_string($link, $username ),
            mysqli_real_escape_string($link, $email));
        
    mysqli_query($link, $query);
}

header("Location: index.php"); 
?>