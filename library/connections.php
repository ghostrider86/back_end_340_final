<?php
/*
 * Proxy connection to the database
 */
function phpmotorsConnect()
{
    
    $dbname = 'phpmotors';
    $username = 'iClient';
    $server = 'mysql:3306';
    $password = 'U@Zyay/uYhM7!*po';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try{
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch(PDOException $e){
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}

?> 