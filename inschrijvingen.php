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
    //initialiseren van de variables
    $achternaam ="";
    $voornaam ="";
    $email_1 ="";
    $email_2 ="";
    $tele ="";
    $studie ="";
    $comment="";// Studie moet ingevuld zijn
    $succes="";
    //test function aanmaken tegen code in txtboxen
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if (isset($_POST['send'])) {

    // achternaam:
    // required:
    if (empty($_POST['naam'])) {
    $achternaamError = "* Achternaam is verplicht.";
    }
    // achternaam correct
    else {
    $achternaam = (test_input($_POST['naam']));
    // check name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)) {
    $achternaamError = "* Foutieve naam (Letters en spaties)";
    }
    }

    
// voornaam:
// required:
if (empty($_POST['voornaam'])) {
$voornaamError = "* Voornaam is verplicht.";
}
// voornaam correct
else {
$voornaam = (test_input($_POST["voornaam"]));
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) {
$achternaamError = "* Foutieve naam (Letters en spaties)";
}
}


    if (empty($_POST["email_1"])) {
    $email1Error = "* Email is verplicht";
    } else {
    $email_1 = (test_input($_POST["email_1"]));
    // check if e-mail address syntax is valid or not
    if (!filter_var($email_1, FILTER_VALIDATE_EMAIL)) {
    $email1Error = "* Invalid email format";
    }
    }
        
if (empty($_POST["email_2"])) {
$email2Error = "* Email is verplicht";
} else {
$email_2 = (test_input($_POST["email_2"]));
// check if e-mail address syntax is valid or not
if (!filter_var($email_2, FILTER_VALIDATE_EMAIL)) {
$email2Error = "* Invalid email format";
}
}


    if (($_POST["email_2"]) != ($_POST["email_1"]))
    {
        $anderemailError = "* Emails zijn niet hetzelfde!";
    }
    
    
$tele = (test_input($_POST["tele"]));
// check name only contains letters and whitespace
if (!preg_match("/^[0-9]/",$tele)) {
$telError = "* Foutief telefoon nummer";
}
if (empty($_POST["bericht"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["bericht"]);
  }
  
if (empty($_POST["studie"])) {
$studieError = "* Vul een studierichting in.";
} else {
    $studie = test_input($_POST["studie"]);
}
//test om te zien of de message klopt: DELETE als je het gaat gebruiken;
// commentaar "//" Weghalen bij gebruik. Wamp heeft geen mailservice.
 if ($achternaamError == "" && $voornaamError == "" && $email1Error == "" && $email2Error == "" && $anderemailError == "" && $telError == "" && $studieError == "") {
    //ophalen van alle ingevulde form info.
    $to = 'maxim.derboven@gmail.com';
    $subject = 'Nieuwe inschrijving';

    $message = 'naam:' . $achternaam . " " . $voornaam . "\n";
    $message .= 'email:' . $email_1 . "\n";
    $message .= 'Ingeschreven voor:' . $studie . "\n";
    $message .= 'tele: ' . $tele . "\n";
    $message .= 'bericht:' . $message . "\n";
    //$succes = (mail($to, $subject, $message));
    
    //if (!$succes) {
    //$succes = 'ERROR TRY AGAIN';
    //}
 //else {
       die(header("Location: includes/bedankt_aanvraag.php")); 
   // }
}
}
?>

<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
            <?php include("includes/Template_h.php"); ?>
    </head>
    <body>
        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="styles/standard.css" />
        <link rel="stylesheet" type="text/css" href="styles/inschrijvingen.css" />
        <!-- Add icon library -->
        <!-- Hero Image -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="row">
            <div id="Main">
                <div class="column left0">
                    <p class="one"> Inschrijvingen </p>
                    <!-- Content -->
                    <div class="inforechts">
                        <form method="post" name="Inschrijven" id="Inschrijven" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="row">
                                <div class="col-25">
                                    <label for="naam" class="infoTijden"> Naam: </label>
                                </div>
                                <div class="col-75">
                            <input type="text" name="naam" id="naam" value="<?php echo $achternaam;?>" placeholder="Je naam (Van dijk)"/>
                            <span style="color:red; font-size:13px;"><?php echo $achternaamError;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="voornaam"class="infoTijden"> Voornaam: </label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="voornaam" id="voornaam" value="<?php echo $voornaam;?>" placeholder="Je voornaam (Bert)"/>
                            <span style="color:red; font-size:13px;"><?php echo $voornaamError;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email_1"class="infoTijden"> Emailadres: </label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="email_1" id="email_1" value="<?php echo $email_1;?>" placeholder="Je email"/>
                            <span style="color:red; font-size:13px;"><?php echo $email1Error;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email_2"class="infoTijden"> herhaal uw Emailadres: </label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="email_2" id="email_2" value="<?php echo $email_2;?>" placeholder="Nog eens je email"/>
                            <span style="color:red; font-size:13px;"><?php echo $email2Error;?></span>
                            <span style="color:red; font-size:13px;"><?php echo $anderemailError;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="tele"class="infoTijden"> telefoonnummer (optioneel): </label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="tele" id="tele" maxlength="10" value="<?php echo $tele;?>" placeholder="je telefoonnummer (048857339)"/>
                            <span style="color:red; font-size:13px;"><?php echo $telError;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="studie"class="infoTijden"> Ik heb interesse / wil me inschrijven voor: </label>
                        </div>
                        <div class="col-75">
                            <p><b>1ste graad </b></p>
                            <hr>
                            <div class="row">
                                <div class="column4">
                                    <p><b>1ste jaar: </b></p>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="1STE JAAR: 1ste leerjaar A-stroom") echo "checked";?> id="studie"value="1STE JAAR: 1ste leerjaar A-stroom"><label style="font-size: 11px; padding: 0px">1ste leerjaar A-stroom</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="1STE JAAR: 1ste leerjaar B-stroom") echo "checked";?> id="studie"value="1STE JAAR: 1ste leerjaar B-stroom"><label style="font-size: 11px; padding: 0px">1ste leerjaar B-stroom</label>
                                </div>
                                <div class="column4">
                                    <p><b>2de jaar:</b></p>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="2DE JAAR: 2de jaar A-Stroom") echo "checked";?> id="studie"value="2DE JAAR: 2de jaar A-Stroom"><label style="font-size: 11px; padding: 0px">2de jaar A-Stroom</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="2DE JAAR: Beroepsvoorbereidend leerjaar") echo "checked";?> id="studie"value="2DE JAAR: Beroepsvoorbereidend leerjaar"><label style="font-size: 11px; padding: 0px">Beroepsvoorbereidend leerjaar</label>
                                </div>
                            </div>
                            <p><b>2de graad </b></p>
                            <hr>
                            <div class="row">
                                <div class="column4">
                                    <p><b>3de jaar: </b></p>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="3DE JAAR: TSO - Ondernemen & IT (Handel)") echo "checked";?> id="studie"alue="3DE JAAR: TSO - Ondernemen & IT (Handel)"><label style="font-size: 11px; padding: 0px">TSO - Ondernemen & IT (Handel)</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="3DE JAAR: BSO - Office (Kantoor)") echo "checked";?> id="studie"value="3DE JAAR: BSO - Office (Kantoor)"><label style="font-size: 11px; padding: 0px">BSO - Office (Kantoor)</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="3DE JAAR: BSO - Haarzorg") echo "checked";?> id="studie"value="3DE JAAR: BSO - Haarzorg"><label style="font-size: 11px; padding: 0px">BSO - Haarzorg</label>
                                </div>
                                <div class="column4">
                                    <p><b>4de jaar:</b></p>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="4DE JAAR: TSO - Ondernemen & IT (Handel)") echo "checked";?> id="studie"value="4DE JAAR: TSO - Ondernemen & IT (Handel)"><label style="font-size: 11px; padding: 0px">TSO - Ondernemen & IT (Handel)</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="4DE JAAR: TSO - Ondernemen & Comm. (Handel-Talen)") echo "checked";?> id="studie"value="4DE JAAR: TSO - Ondernemen & Comm. (Handel-Talen)"><label style="font-size: 11px; padding: 0px">TSO - Ondernemen & Comm. (Handel-Talen)</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="4DE JAAR: BSO - Office (Kantoor)") echo "checked";?> id="studie" value="4DE JAAR: BSO - Office (Kantoor)"><label style="font-size: 11px; padding: 0px">BSO - Office (Kantoor)</label><br>
                                    <input type="radio" type="text" name="studie" <?php if (isset($studie) && $studie =="4DE JAAR: BSO - Haarzorg") echo "checked";?> id="studie"  value="4DE JAAR: BSO - Haarzorg"><label style="font-size: 11px; padding: 0px">BSO - Haarzorg</label>
                                </div>
                            </div>
                            <p><b>3de graad </b></p>
                            <hr>
                            <div class="row">
                                <div class="column4">
                                    <p><b>5de jaar:</b></p>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="5DE JAAR: TSO - Ondernemen & marketing (handel)") echo "checked";?>  value="5DE JAAR: TSO - Ondernemen & marketing (handel)"><label style="font-size: 11px; padding: 0px">TSO - Ondernemen & marketing (handel)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="5DE JAAR: TSO - Office-Management & Comm. (ST)") echo "checked";?> value="5DE JAAR: TSO - Office-Management & Comm. (ST)"><label style="font-size: 11px; padding: 0px">TSO - Office-Management & Comm. (ST)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="5DE JAAR: TSO - IT & Netwerken (IB)") echo "checked";?>  value="5DE JAAR: TSO - IT & Netwerken (IB)"><label style="font-size: 11px; padding: 0px">TSO - IT & Netwerken (IB)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="5DE JAAR: TSO - Accountancy & IT (BI)") echo "checked";?> value="5DE JAAR: TSO - Accountancy & IT (BI)"><label style="font-size: 11px; padding: 0px">TSO - Accountancy & IT (BI)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="5DE JAAR: BSO - Office & Logistics") echo "checked";?>  value="5DE JAAR: BSO - Office & Logistics"><label style="font-size: 11px; padding: 0px">BSO - Office & Logistics</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="5DE JAAR: BSO - Haarzorg") echo "checked";?> value="5DE JAAR: BSO - Haarzorg"><label style="font-size: 11px; padding: 0px">BSO - Haarzorg</label>
                                </div>
                                <p><b>6de jaar:</b></p>
                                <div class="column4">    
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="6DE JAAR: TSO - Ondernemen & marketing (handel)") echo "checked";?> value="6DE JAAR: TSO - Ondernemen & marketing (handel)"><label style="font-size: 11px; padding: 0px">TSO - Ondernemen & marketing (handel)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="6DE JAAR: TSO - Office-Management & Comm. (ST)") echo "checked";?> value="6DE JAAR: TSO - Office-Management & Comm. (ST)"><label style="font-size: 11px; padding: 0px">TSO - Office-Management & Comm. (ST)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="6DE JAAR: TSO - IT & Netwerken (IB)") echo "checked";?>  value="6DE JAAR: TSO - IT & Netwerken (IB)"><label style="font-size: 11px; padding: 0px">TSO - IT & Netwerken (IB)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="6DE JAAR: TSO - Accountancy & IT (BI)") echo "checked";?>  value="6DE JAAR: TSO - Accountancy & IT (BI)"><label style="font-size: 11px; padding: 0px">TSO - Accountancy & IT (BI)</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="6DE JAAR: BSO - Office & Logistics") echo "checked";?>  value="6DE JAAR: BSO - Office & Logistics"><label style="font-size: 11px; padding: 0px">BSO - Office & Logistics</label><br>
                                    <input type="radio" type="text" name="studie" id="studie" <?php if (isset($studie) && $studie =="6DE JAAR: BSO - Haarzorg") echo "checked";?>  value="6DE JAAR: BSO - Haarzorg"><label style="font-size: 11px; padding: 0px">BSO - Haarzorg</label>
                                </div>
                            </div>
                            <span style="color:red; font-size:13px;"><?php echo $studieError;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="bericht" class="infoTijden"> Ik wil nog iets vragen / meedelen: </label>
                        </div>
                        <div class="col-75">
                            <textarea type="text" name="bericht" id="bericht"  placeholder="Eventuele vragen of opmerkingen"><?php echo $comment;?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <span style="color:red; font-size:13px;"><?php echo $succes;?></span>
                        <input type="reset" name="rst" onclick="" value="Herstellen" style="margin: 6px;" />
                        <input type="submit" name="send" style="margin: 6px;" value="Verstuur aanvraag">
                    </div>
                    </form>
                </div>
            </div>
            <div class="column right0">
                <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                <p class="one"> Wanneer</p>
                <blockquote class="inforechts">
                    <div class="infoTijden">
                        <p><b>Mei en Juni</b></p>
                        <p>alleen op afspraak</p>
                        <p><b>Donderdag 28 juni</b></p>
                        <p>16.00 uur tot 20.00 uur</p>
                        <p><b>vrijdag 29 juni</b></p>
                        <p>10.00 tot 12.00 uur</p>
                        <p><b>maandag 2 juli - vrijdag 6 juli</b></p>
                        <p>09.30 uur tot 13.00 uur & 15.00 uur tot 18.30 uur</p>
                        <p><b>maandag 20 augustus - vrijdag 31 augustus</b></p>
                        <p>09.30 uur tot 13.00 uur & 15.00 uur tot 18.30 uur</p>
                        <p>Zie <a href="kalender.php" style=" all: unset; cursor: pointer!important; font-style: italic!important;" ><b>kalender</b></a>, voor alle data.</p>
                        <p><b>Om de inschrijvingen te realiseren hebben we volgende documenten nodig:</b></p>
                        <p>• Identiteitskaart (kopie)</p>
                        <p>• Volledig rapport </p>
                        <p>• Andere relevante attesten  (bv. van een leerstoornis)</p>
                        <p><b>Inschrijvingen gebeuren enkel indien één van de ouders aanwezig is.</b></p>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php include("includes/Template_f.php"); ?>
</footer>
</html>