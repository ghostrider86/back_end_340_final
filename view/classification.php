<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $classificationName; ?> vehicles | PHP Motors, Inc.</title>
    <link rel="stylesheet" href="/phpmotors/css/main.css" media="screen">
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
        
            <h1><?php echo $classificationName; ?> vehicles</h1>

            <?php if(isset($message)){
                echo $message; }
            ?>

            <?php if(isset($vehicleDisplay)){
                echo $vehicleDisplay;
            } ?>

        </main>
        
        <footer id="site_footer">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php';?>
        </footer>
    </div>

</body>
</html>