<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: Script om de inschrijving form door te mailen;.
Version: 1.0
Text Domain: kaso-mortsel
-->

<?php include("a_config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
            <?php include("Template_h.php"); ?>
    </head>
    <body>
        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="../styles/standard.css" />
        <link rel="stylesheet" type="text/css" href="../styles/inschrijvingen.css" />
        <!-- Add icon library -->
        <!-- Hero Image -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="row">
            <div id="Main"> 
                    <p class="one"> Inschrijvingen </p>
                    <!-- Content -->
                    <div class="inforechts">
                        <p> Bedankt voor uw aanvraag! We nemen zo snel mogelijk contact met u op.</p>
                        <p> U wordt omgeleid.</p>
                        <img src="counter.gif"/>
                        <meta http-equiv="refresh" content="8;../index.php">
                </div>
        </div>
    </div>
</body>
<footer>
    <?php include("Template_f.php"); ?>
</footer>
</html>