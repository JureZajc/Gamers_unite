<?php
    include_once './database.php';
    include_once './session.php';
    
    $ID_games = (int) $_GET['id'];
    
    $query = "DELETE FROM games WHERE ID_games=$ID_games";
    mysqli_query($link, $query);
    
    header("location: games.php");
    
?>