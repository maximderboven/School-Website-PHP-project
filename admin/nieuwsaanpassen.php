<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: Script om een nieuws aan te passen. Wordt herleid na een ingevuld form van Admin.php.
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
// variabele zetten die we nodig gaan hebben. in dit geval het photo path.
$target = "uploads/images/";
$target = $target . basename($_FILES['photo']['name']);

// ophalen van ingevulde form info
$title = $_POST["title"];
$content = $_POST["content"];
$caption = $_POST["caption"];
$pic = ($_FILES['photo']['name']);
$nummer = $_POST["nummer"];

/* Database credentials. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
require_once 'config.php';

// Initialize the session
$sql = "UPDATE news SET title='$title',text='$content',caption='$caption',image='$pic' WHERE id=$nummer";
if ($link->query($sql) === TRUE) {
    echo "Nieuws:  $title ,is succesvol aangepast.";
} else {
    echo "Error updating record: " . $link->error;
}
// File moven in de map admin/uploads/images (van pc gebruiker naar de server)
if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
    echo "The file has been uploaded, and your information has been added to the directory";
} else {

    echo "Sorry, there was a problem uploading your file.";
}
?> 