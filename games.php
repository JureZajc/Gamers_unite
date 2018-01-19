<?php
    include_once './header.php';
    include_once './database.php';
?>
<h1 style="text-align: center">Plesi</h1>

<a href="add_game.php" class="button" style="background-color: red">Dodaj ples</a>

<table>
    <tr>
        <td>Naslov plesa</td>
       
        <td>Uredi ples</td>
        <td>Ali plešeš ples?</td>
        <td>Poglej ljudi kateri plešejo ples</td>
    </tr>
<?php
    $query = "SELECT * FROM games";
    $result = mysqli_query($link, $query);
    while ($game = mysqli_fetch_array($result)) {        
        echo '<tr>';
        echo '<td>'.$game['game_name'].'</td>';
       // echo '<td>'.$game['description'].'</td>';
        echo '<td>';
        echo '<a href="game_edit.php?id='.$game['ID_games'].'" >Uredi ples</a> ';
      //  echo '</td>';
        echo '<td>';
        echo '<a href="game_score.php?id='.$game['ID_games'].'" >Ali plešeš ples?</a> ';
         echo '</td>';
         echo '<td>';
        echo '<a href="scores.php?id='.$game['ID_games'].'"> Poglej kateri plešejo ples </a>';
        echo '</td>';
        echo '</tr>';
    }
?>
</table>



<?php
    include_once './footer.php';
?>