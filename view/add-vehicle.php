<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
 header('location: /phpmotors/');
 exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors Add Vehicle</title>
    <link rel="stylesheet" href="/phpmotors/css/main.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/vehicle.css" media="screen">
</head>

<body>
    
    <div id="cover_div">
        <header> 
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/header.php';?>
        </header>            
            
        <nav id="nav_bar">
            <?php echo $navList; ?>
        </nav>

        <main>
        
            <h1>Add Vehicle</h1>

            <?php
                if (isset($message)) {
                echo $message;
                }
            ?>
            <p class="required">* All form feilds are required</p>
            <form action="/phpmotors/vehicles/index.php" method="POST">
            
                <label>Classification:</label><br>
                <?php echo $classificationList ?><br>
                <label for="invMake">Make:</label><br>
                <input type="text" id="invMake" name="invMake" required autofocus <?php if(isset($invMake)){echo "value='$invMake'";}  ?>><br>
                <label for="invModel">Model:</label><br>
                <input type="text" id="invModel" name="invModel" required <?php if(isset($invModel)){echo "value='$invModel'";}  ?>><br>
                <label for="invDescription">Description:</label><br>
                <textarea id="invDescription" name="invDescription" required <?php if(isset($invDescription)){echo "value='$invDescription'";}  ?>></textarea><br>
                <label for="invImage">Image:</label><br>
                <input type="text" id="invImage" name="invImage" value="/images/no-image.png" required <?php if(isset($invImage)){echo "value='$invImage'";}  ?>><br>
                <label for="invThumbnail">Image Thumbnail:</label><br>
                <input type="text" id="invThumbnail" name="invThumbnail" value="/images/no-image.png" required <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  ?>><br>
                <label for="invPrice">Price:</label><br>
                <input type="number" id="invPrice" name="invPrice" required <?php if(isset($invPrice)){echo "value='$invPrice'";}  ?>><br>
                <label for="invStock">Stock:</label><br>
                <input type="number" id="invStock" name="invStock" required <?php if(isset($invStock)){echo "value='$invStock'";}  ?>><br>
                <label for="invColor">Color:</label><br>
                <input type="text" id="invColor" name="invColor" required <?php if(isset($invColor)){echo "value='$invColor'";}  ?>><br>
                <input type="submit" value="Add Vehicle">
                <input type="hidden" name="action" value="addCar">

            </form>
        </main>
        
        <footer id="site_footer">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php';?>
        </footer>
    </div>

</body>
</html>