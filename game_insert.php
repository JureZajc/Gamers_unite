<?php
include_once './session.php';
include_once './database.php';

$game_name = $_POST['title'];
$description = $_POST['description'];

if ((!empty($game_name))) {
    
    $query = sprintf("INSERT INTO games (game_name,description) "
            . " VALUES('%s','%s')", 
            mysqli_real_escape_string($link, $game_name), 
            mysqli_real_escape_string($link, $description));
    
    mysqli_query($link, $query);
    
    header("Location: games.php");
}
?>