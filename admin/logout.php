<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: logout script. alle logout knoppen runnen dit script.
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>