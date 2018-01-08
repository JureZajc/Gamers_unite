<?php

    include_once './header.php';
    include_once './database.php';
    
        //pridobim podatek o avtomobilu, ki ga moram izpisati  še morem tam dodat
    $car_id = (int) $_GET['id'];
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $car_id;?>" />
    <label>Choose a picture</label>
    <input type="file" name="fileToUpload" id="fileToUpload" style="text-align: center">
    <label>Description</label>
    <textarea name="description" placeholder="Enter description"></textarea>
    <input type="submit" value="Naloži" name="submit">
</form>

<?php

include_once './footer.php';
?>

