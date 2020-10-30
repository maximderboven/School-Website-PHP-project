<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: Script om de inschrijving form door te mailen;.
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
    //initialiseren van de error variables
    $achternaamError =""; // name alleen letters, spaties of leeg
    $voornaamError =""; // name alleen letters, spaties of leeg
    $email1Error =""; // address syntax is valid or not of leeg
    $email2Error =""; // address syntax is valid or not of leeg
    $anderemailError =""; // emauils hetzelfde
    $telError =""; //nummers, lengte MAG leeg
    $studieError =""; // Studie moet ingevuld zijn
    
    if (isset($_POST['send'])) {
    // achternaam:
    // required:
    if (empty($_POST['naam'])) {
    $achternaamError = "Achternaam is verplicht.";
    }
    // achternaam correct
    else {
    $achternaam = test_input($_POST["naam"]);
    // check name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)) {
    $achternaamError = "Foutieve naam (Letters en spaties)";
    }
    }

    
// voornaam:
// required:
if (empty($_POST['voornaam'])) {
$voornaamError = "Voornaam is verplicht.";
}
// voornaam correct
else {
$voornaam = test_input($_POST["voornaam"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) {
$achternaamError = "Foutieve naam (Letters en spaties)";
}
}


    if (empty($_POST["email_1"])) {
    $email1Error = "Email is verplicht";
    } else {
    $email_1 = test_input($_POST["email_1"]);
    // check if e-mail address syntax is valid or not
    if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email_1)) {
    $email1Error = "Invalid email format";
    }
    }

    
if (empty($_POST["email_2"])) {
$email2Error = "Email is verplicht";
} else {
$email_2 = test_input($_POST["email_2"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email_2)) {
$email2Error = "Invalid email format";
}
}


    if (($_POST["email_2"]) != ($_POST["email_1"]))
    {
        $anderemailError = "Emails zijn niet hetzelfde!";
    }
    
    
$tele = test_input($_POST["tele"]);
// check name only contains letters and whitespace
if (!preg_match("/^[1-9][0-9]{0,10}$/",$tele)) {
$telError = "Foutief telefoon nummer";
}

if (empty($_POST["studie"])) {
$studieError = "Vul een studierichting in.";
}
    //ophalen van alle ingevulde form info.
    $to = 'maxim.derboven@gmail.com';
    $subject = 'Nieuwe inschrijving';

    $message = 'naam:' . $_POST['naam'] . " " . $_POST['voornaam'] . "\n";
    $message .= 'email:' . $_POST['email_1'] . "\n";
    $message .= 'Ingeschreven voor:' . $_POST['studie'] . "\n";
    $message .= 'tele: ' . $_POST['tele'] . "\n";
    $message .= 'bericht:' . $_POST['bericht'] . "\n";
}
//test om te zien of de message klopt: DELETE als je het gaat gebruiken;
echo $message;
// commentaar "//" Weghalen bij gebruik. Wamp heeft geen mailservice.
 // $success = mail($to, $subject, $message);
header('location: ../index.php');
?>