<?php
    include_once './session.php';
    include_once './database.php';
    include_once './header.php';
    $ID_games = (int) $_GET['id'];
    $user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM games WHERE ID_games=$ID_games";
    $result = mysqli_query($link, $query);
    $game = mysqli_fetch_array($result);
?>
<h1 style="text-align: center">Enter your highscore</h1>
<form action="hs_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $ID_games;?>" />
    <label>Title</label>
    <input type="text" name="game_name" value="<?php echo $game['game_name'];?>" required="required"  disabled="disabled" />
    <label>High score</label>
    <input type="text" name="high_score"placeholder="Enter high score" />
    <input type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Cancel" />
</form>
<?php
include_once './footer.php';
?>



