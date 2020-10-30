<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/Template_h.php"); ?>
    </head>
    <body>
        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="styles/standard.css" />
        <!-- Add icon library -->
        <!-- Hero Image -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="row">
            <div id="Main">
                <div class="column left">
                    <p class="one"> Informatie </p>
                    <!-- Content -->
                    <div class="inforechts">
                        <p>Hier moet basic info.</p>
                    </div>
                </div>
                <div class="column right">
                    <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                    <p class="one"> Navigatie</p>
                    <blockquote class="inforechts">
                        <?php include ("includes/Template_InformatieNAV.php") ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php include("includes/Template_f.php"); ?>
    </footer>
</html>