<?php
    include_once './header.php';
    include_once './database.php';
?>
<h1 style="text-align: center">Games :D</h1>

<a href="add_game.php" class="button" style="background-color: red">ADD GAME</a>

<table>
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Edit info</td>
        <td>Game scores!!</td>
    </tr>
<?php
    $query = "SELECT * FROM games";
    $result = mysqli_query($link, $query);
    while ($game = mysqli_fetch_array($result)) {        
        echo '<tr>';
        echo '<td>'.$game['game_name'].'</td>';
        echo '<td>'.$game['description'].'</td>';
        echo '<td>';
        echo '<a href="game_edit.php?id='.$game['ID_games'].'" >Edit game</a> ';
        echo '</td>';
        echo '<td>';
        echo '<a href="game_score.php?id='.$game['ID_games'].'" >Add your score</a> ';
        echo '<br>';
        echo '<br>';
        echo '<a href="scores.php?id='.$game['ID_games'].'"> See high scores </a>';
        echo '</td>';
        echo '</tr>';
    }
?>
</table>



<?php
    include_once './footer.php';
?>