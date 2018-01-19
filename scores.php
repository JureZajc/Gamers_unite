<?php
    include_once './database.php';
    include_once './header.php';
    include_once './session.php';
    $ID_games = (int) $_GET['id'];

    $query = "SELECT  * FROM games WHERE ID_games=$ID_games";
    $result = mysqli_query($link, $query);
    $game = mysqli_fetch_array($result);
?>

<h1 style="text-align: center"> Poglej plesalce za ples: <?php    echo $game['game_name'];?></h1>
<table style=" width: 100%">
    <tr>
        <th>Ime</th>
        <th>Priimek</th>
        <th>Ime plesa</th>
        <th>Kontakt</th>
        
    </tr>
    <?php
    $query = "SELECT DISTINCT users.username, users.first_name, users.last_name ,users.email, games.ID_games, games.game_name, users.username, users_scores.high_score,"
            . "  users.ID_users, users.username  AS user "
            . " FROM users_scores "
            . "  INNER JOIN games  ON games.ID_games=users_scores.ID_games "
            . " INNER JOIN  users ON users.ID_users =users_scores.ID_users WHERE games.ID_games = $ID_games AND users_scores.high_score = 1" ;
    //echo $query; die();
    $result = mysqli_query($link, $query);
    
    if (!$result) {
        echo $query;
        die();
    }
    while ($game = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'.$game['first_name'].'</td>';
        echo '<td>'.$game['last_name'].'</td>';
        echo '<td>'.$game['game_name'].'</td>';
        ?>
    <td><a href="mailto:<?php echo $game['email']; ?>?subject=<?php echo "Dance Partner"; ?>"><?php echo $game['email']; ?></a></td>
        <?php
        echo '</tr>';
    }
    ?>
</table>
<!--
<h3 style="text-align: center"> Insert comment about high scores table here! :)</h3>

<form action="comment_insert.php" method="post">
    <input type="hidden" name="id_game" value="<?php echo $ID_games;?>" />
    <textarea name="content"></textarea>
    <input type="submit" value="Submit" />
</form>

<h3 style="text-align: center">Comments
    <?php /*
    $query=" SELECT count(*) as nmb FROM comments WHERE ID_games = $ID_games";
    $result = mysqli_query($link, $query);
    $nmb_comments = mysqli_fetch_array($result);
    echo '('.$nmb_comments['nmb'].')';*/
    ?>
</h3>

<?php
    $query = "SELECT c.ID_comments AS cid, c.content, c.date_add, "
            . " u.username, u.last_name, u.ID_users AS uid "
            . " FROM comments c INNER JOIN users u "
            . " ON c.ID_users=u.ID_users "
            . " WHERE (c.ID_games=$ID_games)";
    //echo $query;
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {        
        echo '<div >';
        echo '<div >';
        echo $row['username'].'('.$row['date_add'].')';
        echo '</div>';
        echo $row['content'];
        echo '</div>'; 
        echo '<hr />';
    }
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $ID_games;?>" />
    <label>Choose a picture</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <label>Description</label>
    <input type="text" name="description" />
    <input type="submit" value="Upload" name="submit">
</form>

<?php
    $query = "SELECT * FROM images WHERE ID_games=$ID_games";
    $result = mysqli_query($link, $query);
    while($row=  mysqli_fetch_array($result)) {
        echo '<a class="example-image-link" href="'.$row['url'].'" data-lightbox="example-set" data-title="'.$row['description'].'">';
        echo ' <img src="'.$row['url'].'" alt="" width="120" />';
        echo '</a>';
    }
?>

-->

<?php
include_once './footer.php';
?>
