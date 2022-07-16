<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/main.css">
    <title>PHP Motors Home Page</title>
    
</head>

<body>
    
    <div id="cover_div">
        <header> 
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/header.php';?>
        </header>
                     
        <nav id="nav_bar">
            <?php echo $navList; ?>
        </nav>

        </header>

        <main>
        
            <h1>Welcome to PHP Motors</h1>

            <div class="banner_image">   
            <div id="delorean-features">
                    <h2>DMC Deloran</h2>
                    <p>3 Cup holders</p>
                    <p>Superman Doors</p>
                    <p>Fuzzy Dice!</p>
                </div>

                <div class="order">
                    <img class="own_today_button" src="/phpmotors/images/site/own_today.png" alt="own today image">
                    <img src="/phpmotors/images/vehicles/delorean.jpg" alt="delorean image">
                </div>              
            </div>

            <div class="review_upgrade">                
                <div class="review_area">
                    <h2>DMC Delorean Reviews</h2>                
                    <ul>
                        <li>"So fast its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>    
                        <li>"I'm feeling Marty Mcfly!" (5/5)</li>
                        <li>"The most futuristic ride of our day." (4.5/5)</li>
                        <li>"80's livin and I love it!" (5/5)</li>
                    </ul>
                </div>                
                           
                </section>
                <div class="upgrade_wrapper">
                    <h2>Deloran Upgrades</h2>
                    <div class="upgrade_parts">
                        <figure>
                            <div class="image_div">
                                <img src="images/upgrades/flux-cap.png" alt="flux capcitor upgrade">
                            </div>
                            <figcaption><a href="#">Flux Capacitor</a></figcaption>
                        </figure>
                        <figure>
                            <div class="image_div">
                                <img src="images/upgrades/flame.jpg" alt="flame upgrade">
                            </div>                            
                           <figcaption> <a href="#">Flame Decals</a></figcaption>
                        </figure>
                        <figure>
                            <div class="image_div">
                                <img src="images/upgrades/bumper_sticker.jpg" alt="bumper sticker upgrade">
                            </div>                            
                           <figcaption> <a href="#">Bumper Stickers</a></figcaption>
                        </figure>
                        <figure>
                            <div class="image_div">
                                <img src="images/upgrades/hub-cap.jpg" alt="hub cap upgrade">
                            </div>
                            <figcaption><a href="#">Hub Caps</a></figcaption>
                        </figure>
                    </div>
                </div>
            </div>

        </main>
        
        <footer id="site_footer">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php';?>
        </footer>
    </div>

</body>
</html>