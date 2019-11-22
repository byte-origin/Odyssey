<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Server.php';
$Test = new Odyssey\Server();
if($Test->create('ForSaken Borders', 'ForB', array('URL', 'https://cdn.discordapp.com/icons/466356954865074176/0b1577cd3e9b96dadb07f2f72cf71796.webp')) == true) {
    echo 'Complete!';
}
    
?>