<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $vehicles['invMake'] ?>   <?php echo $vehicles['invModel']?></title>
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

            <?php if(isset($message)){
                echo $message; }
            ?>

            <p>&#8595;&#8595;&#8595;VEHICLE REVIEWS BELOW&#8595;&#8595;&#8595;</p>

            <div class="detail">
                <?php if(isset($vehicleDetailDisplay)){
                    echo $vehicleDetailDisplay;}
                ?>

                <h2>Customer Reviews</h2>

                <?php if (!isset($_SESSION['loggedin'])) { 
                        echo "<a href='/phpmotors/reviews/index.php?action=login'>Login to add a review</a>";    
                    } else {
                        echo '<form action="/phpmotors/reviews/index.php" method="post">   
                        <textarea name="reviewText" id="reviewText" rows="10" cols="50" placeholder="Add a review here" required></textarea><br>
                        <input type="hidden" name="invId" value="' . isset($vehicles['invId']) .'">
                        <input type="hidden" name="invMake" value="' . isset($vehicles['invMake']) . '">
                        <input type="hidden" name="invModel" value="' . isset($vehicles['invModel']) . '">
                        <input type="hidden" name="clientId" value="' . $_SESSION['clientData']['clientId'] . '">
                        <input type="hidden" name="action" value="add">
                        <input type="submit" value="Submit Review">
                        </form>';    }                          
                ?>

                <?php if(isset($reviewDisplay)) {
                        echo $reviewDisplay;}
                    else 
                        echo 'no reviews yet';
                ?>
                   
                
            </div>            

        </main>
        
        <footer id="site_footer">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php';?>
        </footer>
    </div>

</body>
</html>