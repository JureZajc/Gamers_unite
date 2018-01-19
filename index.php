<?php
include_once "./header.php";
?>

<h1 style="text-align: center">Pozdravljeni na strani kjer lahko najdete svojega plesnega partnerja</h1>

<?php
    if ($_SESSION == NULL){
        echo "<div style=\"text-align:center\">";
        echo "Prosim če se prijavite";
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