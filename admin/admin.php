<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: ADMIN om de site te beheren.
Version: 1.0
Text Domain: kaso-mortsel
-->
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!-- Er is geen CSS file Dus we doen da ffkes hier -->
<style>
    p, h1, label {
        color: white;
    }
    body{ font: 14px sans-serif; text-align: center; }
</style>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Voor snelle opmaak gebruik ik ff een bootstrap pack css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"/>
    </head>
    <body style="background-color: royalblue;">

        <div class="page-header">
            <h1 style="color: white">Welkom, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
        </div>

        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
        <hr>
        <p style="font-size: 20px;"><b> Nieuws aanpassen </b></p>
        <p style="font-size: 20px;"> Er staat een limiet op van tekst die je kan ingeven per vak, in de titel bv niet meer als 50 char.</p>
        <!-- Form: Nieuws aanpassen: -->
        <form  enctype="multipart/form-data" action="nieuwsaanpassen.php" method="post">
            <label>Welk nieuws wil je vervangen ? (nummer van (artikel) 1 tot en met (artikel) 5)</label>
            <input type="number" name="nummer" min="1" max="5"><br>

            <label>Titel (Geef een titel aan het document)</label>
            <input  minlength=5 maxlength=25 type="text" name="title" value=""><br>

            <label>Content (Wat moet er in de beschrijving staan)</label>
            <textarea minlength=70 maxlength=1000 type="text" name="content" value="" style="" rows="5" cols="80" id="TITLE"></textarea><br>

            <label>Foto (foto op de homepagina in in het groot op de nieuwspage zelf)</label>
            <input type="file" name="photo" style="padding:0% 42% 0%"><br>

            <label>Caption (Beetje info over de foto zelf)</label>
            <input  minlength=5 maxlength=30 type="text" name="caption" value=""><br>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-primary" href="admin.php">Cancel</a>
            </div>

        </form>
        <hr>
        <p style="font-size: 20px;"><b> Event toevoegen aan de kalender </b></p>
        <p style="font-size: 20px;"> Van de eerste keer goed svp, op de moment kunt ge da ni verwijderen, delten gaat vanzelf wnr ie ovcer tijd is.</p>
        <!-- Form: kalender aanpassen: -->
        <form  enctype="multipart/form-data" action="kalendertoevoegen.php" method="post">

            <label> Kies de dag. </label>
            <input type="date" name="datum"><br>

            <label>Titel (Geef een titel voor eht event)</label>
            <input type="text" name="title"><br>

            <label> Belangrijk ? maw moeten we er naar aftellen ? bv 'paasvakantie' laten we samen aftellen!. </label><br>
            <input type="radio" name="aftellen" value="1"> Ja!<br>
            <input type="radio" name="aftellen" value="0"> nee, niet nodig<br>

            <label>Content (Wat moet er in de beschrijving staan)</label>
            <textarea type="text" name="content" style="" rows="5" cols="80" id="TITLE"></textarea><br>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-primary" href="admin.php">Cancel</a>
            </div>

        </form>
        <p> Foto op slide show toevoegen of verwijderen </p>
        <form  enctype="multipart/form-data" action="homepageslides.php" method="post">
            <label>Foto (foto op de homepagina in in het groot op de nieuwspage zelf)</label>
            <input type="file" name="photo" style="padding:0% 42% 0%"><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-primary" href="admin.php">Cancel</a>
            </div>
        </form>
    </body>
</html>