<?php

$server = "localhost"; //127.0.0.1
$db_username = "uporabnik";
$db_pass = "123";
$db_name = "jure";
$salt = "067Ćdfj5404%%#dg";

$link = mysqli_connect($server, $db_username, $db_pass, $db_name);
mysqli_query($link, "SET NAMES 'utf8'");
?>