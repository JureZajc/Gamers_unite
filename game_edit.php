<?php
    include_once './header.php';
    include_once './database.php';
    include_once './session.php';

    $ID_games = (int) $_GET['id'];

    $query = "SELECT * FROM games WHERE ID_games=$ID_games";
    $result = mysqli_query($link, $query);
    $game = mysqli_fetch_array($result);
?>
<h1 style="text-align: center">Edit game</h1>
<form action="game_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $ID_games;?>" />
    <label>Title</label>
    <input type="text" name="game_name" value="<?php echo $game['game_name'];?>" required="required" />
    <label>Description</label>
    <textarea name="description"><?php echo $game['description'];?></textarea>
    <input type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Cancel" />
    <div class="button">
    <?php echo ' <a class="test" href="delete.php?id='.$ID_games.'" onclick="return confirm(\'Are you sure?\')">DELETE</a>';?>
    </div>
</form>
<?php
include_once './footer.php';
?>