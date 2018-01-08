<?php
    include_once './database.php';
    include_once './session.php';
    $ID_games = $_POST['id'];
    $user_id = $_SESSION['user_id'];
    $highscore = $_POST['high_score'];
    $poizvedba = "SELECT ID_games, ID_users, high_score FROM users_scores";
    $rezultat = mysqli_query($link, $poizvedba);
    $rezultat2 = mysqli_fetch_array($rezultat);
    echo $rezultat2;
    /*if ($rezultat2['ID_games'] == $ID_games || $rezultat2['ID_users'] == $user_id){
        $query = "UPDATE users_scores SET high_score = '$highscore' WHERE ID_users = '$user_id'";
        $result = mysqli_query($link, $query2);
        
    }  */
    /*else {*/
        $query = "INSERT INTO users_scores (ID_games, ID_users, high_score) VALUES($ID_games, $user_id, $highscore )";
            
        $result = mysqli_query($link, $query);/*
    }*/
    

    header("Location: games.php");
?>
