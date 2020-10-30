<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: Login details van de database, globaal voor alle files.
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Test123)');
define('DB_NAME', 'kasomortselwebsitedb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!-- wp-config.php display errors van PHP afzetten ajb!! Anders na error bij submitting form hele verplaatsing van divs ipv de normale errormessage
En // verwijderen bij mail AJB!!
-->