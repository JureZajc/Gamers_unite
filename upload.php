<?php
include_once './session.php';
include_once './database.php';

$target_dir = "uploads/";
$datetime_name = date('Ymdhis').$_SESSION['ID_user'];
$target_file = $target_dir .$datetime_name. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {        
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}

$description = $_POST['description'];
$ID_games = (int) $_POST['id'];

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
             
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $query = sprintf("INSERT INTO images(ID_games,description,url) "
                . "       VALUES($ID_games,'%s','%s')",
                mysqli_real_escape_string($link, $description),
                mysqli_real_escape_string($link, $target_file));
        mysqli_query($link, $query);
        
    } else {
        
    }
}
header("Location: scores.php?id=".$ID_games);
?>