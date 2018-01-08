<?php
include_once './session.php';
include_once './database.php';

$game_id = $_POST['id'];
$game_name = $_POST['game_name'];
$description = $_POST['description'];

if ((!empty($game_name))) {
    
    $query = sprintf("UPDATE games SET game_name='%s', description='%s' WHERE ID_games = $game_id", 
            mysqli_real_escape_string($link, $game_name), 
            mysqli_real_escape_string($link, $description));
    
    mysqli_query($link, $query);
    
    header("Location: games.php");
}
?>