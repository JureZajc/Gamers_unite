<?php
    include_once './session.php';
    include_once './database.php';
    
    $ID_users = $_SESSION['user_id'];
    $content = $_POST['content'];
    
    $ID_games = (int) $_POST['id_game'];
    
    $query = sprintf("INSERT INTO comments(ID_users,ID_games,content)"
            . " VALUES ($ID_users, $ID_games, '%s')",
             mysqli_real_escape_string($link, $content));
    mysqli_query($link, $query);
    
    
    notice_user("Uspešno ste dodali komentar", "success");
    header("Location: scores.php?id=".$ID_games);
?>