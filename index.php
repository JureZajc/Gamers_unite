<?php
include_once "./header.php";
?>

<h1 style="text-align: center">Welcome to my page</h1>

<?php
    if ($_SESSION == NULL){
        echo "<div style=\"text-align:center\">";
        echo "You can't do much if you are not registered or log inned. So please use link on sidemenu to register or log in.";
    }
    else {
        echo "<div style=\"text-align:center\">";
        if ($_SESSION['username']){
            echo $_SESSION['username'];
        }
        else {
            echo  $_SESSION['email']; 
        }    
    }
?>

<?php
/*
    echo "<div style=\"text-align:center\">";
    echo  $_SESSION['fullname'];
 */
?>

<?php
include_once './footer.php';
?>