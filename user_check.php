<?php

include_once './database.php';


$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$username = $_POST['username'];
$ime = $_POST['ime'];
$priimek = $_POST['priimek'];

if ((!empty($username))&&
        (!empty($email))&&(!empty($pass1))&&($pass1 == $pass2)) {
    //geslu dodam "začimbo"
    $pass1 = $salt.$pass1;
    //geslo zakodiram
    $pass1 = sha1($pass1);
    $query2 = "SELECT * FROM users";
    $rezultat = mysqli_query($link, $query2);
    $stevilo = mysqli_fetch_array($rezultat);
    if ($stevilo['ID_users'] == NULL){
        $query = sprintf("INSERT INTO users (username, email, pass, first_name, last_name, admin) "
            . " VALUES('%s','%s', '$pass1', '$ime', '$priimek', 1)", 
            mysqli_real_escape_string($link, $username ),
            mysqli_real_escape_string($link, $email));
    }
    else{
    $query = sprintf("INSERT INTO users (username, email, pass, first_name, last_name) "
            . " VALUES('%s','%s', '$pass1', '$ime', '$priimek')", 
            mysqli_real_escape_string($link, $username ),
            mysqli_real_escape_string($link, $email));
        
    mysqli_query($link, $query);
    }
}

header("Location: index.php"); 
?>