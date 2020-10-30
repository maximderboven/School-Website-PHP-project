<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: Script om een nieuw Kalender event toe te voegen. Wordt herleid na een ingevuld form van Admin.php.
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
//Verbinden met de database.
require_once 'config.php';
//ophalen van ingevulde form data (methode=post)
$titel = $_POST["title"];
$content = $_POST["content"];
$datum = $_POST["datum"];
$aftellen = $_POST["aftellen"];

//selecteren van de query en de data in te voegen.
$sql = "INSERT INTO `kalender` (`id`, `titel`, `content`, `datum`, `belangrk`) VALUES (NULL, '$titel', '$content', '$datum','$aftellen');";
if ($link->query($sql) === TRUE) {
    echo "Nieuws:  $titel ,is succesvol aangepast.";
} else {
    echo "Error updating record: " . $link->error;
}
?>