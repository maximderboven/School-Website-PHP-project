<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: Config for kaso mortsel Titles // switch case
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/KaSO-Mortsel/index.php":
        $PAGE_TITLE = "KaSO-Mortsel Home";
        break;
    case "/KaSO-Mortsel/contact.php":
        $PAGE_TITLE = "KaSO-Mortsel Contact";
        break;
    case "/KaSO-Mortsel/informatie.php":
        $PAGE_TITLE = "KaSO-Mortsel Informatie";
        break;
    case "/KaSO-Mortsel/informatie/visietekst.php":
        $PAGE_TITLE = "KaSO-Mortsel Visietekst";
        break;
    case "/KaSO-Mortsel/informatie/clb.php":
        $PAGE_TITLE = "KaSO-Mortsel Info: CLB";
        break;
    case "/KaSO-Mortsel/informatie/ouderraad.php":
        $PAGE_TITLE = "KaSO-Mortsel Info: Ouderraad";
        break;
    case "/KaSO-Mortsel/kalender.php":
        $PAGE_TITLE = "KaSO-Mortsel Kalender";
        break;
    case "/KaSO-Mortsel/studieaanbod.php":
        $PAGE_TITLE = "KaSO-Mortsel Studieaanbod";
        break;
    case "/KaSO-Mortsel/inschrijvingen.php":
        $PAGE_TITLE = "KaSO-Mortsel Inschrijvingen";
        break;
    default:
        $PAGE_TITLE = "KaSO-Mortsel ERROR 404 (Page not found)";
}
?>