<?php
include_once './header.php';
?>
<h1 style="text-align: center">Add game</h1>
<form action="game_insert.php" method="post">
    <label>Title</label>
    <input type="text" name="title" placeholder="Title" required="required" />
    <label>Description</label>
    <textarea name="description" placeholder="Enter description here"></textarea>
    <input type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Cancel" />
</form>
<?php
include_once './footer.php';
?>