<?php
    include_once './session.php';
    include_once './database.php';
    include_once './games.php';
?>

<p style="text-align: center">Here you see your mutual games with other players registered on this page.</p>

<?php
    $query = "SELECT games FROM games  WHERE ";
    $result = mysqli_query($link, $query);
    if($games)
