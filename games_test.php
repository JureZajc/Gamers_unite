<?php
    include_once './session.php';
    include_once './database.php';
    $games = $_POST['games'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user_id'];
    $ID_games = (int) $_POST['game_id'];
    $query = "INSERT INTO games (games, description, ID_users) VALUES ('$ID_games', '$description', '$user_id')";
    mysqli_query($link, $query);
?>