<div id="top_header">
    <img src="/phpmotors/images/site/logo.png" alt="php motors logo">
    <?php if(isset($_SESSION['loggedin'])){         
            echo "<div class='container'><a href='/phpmotors/vehicles/index.php?action=admin'>Welcome {$_SESSION['clientData']['clientFirstname']}</a> | <a href='/phpmotors/accounts?action=Logout'>Logout</a></h1>";
        } else {
            echo "<div class='container'><a href='/phpmotors/accounts/index.php?action=login'>My Account</a></h1>";
        }            
      ?>     
</div>    