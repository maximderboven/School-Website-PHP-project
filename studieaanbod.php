<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/Template_h.php"); ?>
    </head>
    <body>
        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="styles/standard.css" />
        <link rel="stylesheet" type="text/css" href="styles/studieaanbod.css" />
        <script type="text/javascript" src="studies/studiesveranderen.js"></script>
        <!-- Add icon library -->
        <!-- Hero Image -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="row">
            <div id="Main">
                <div class="column left">
                    <p class="one"> Studieaanbod </p>
                    <!-- Content -->
                    <div class="inforechts" id="verander">
                        <p> Kies je studie door op de filters je graad te kiezen.</p><br>
                        <p> <b>1ste graad:</b> eerste jaar & tweede jaar </p>
                        <p> <b>2de graad:</b> derde jaar & vierde jaar </p>
                        <p> <b>3de graad:</b> vierde jaar & vijfde (evt specialisatie jaar)</p>
                    </div>
                </div>
                <div class="column right">
                    <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                    <p class="one"> Filters</p>
                    <blockquote class="inforechts" style="text-align: center;">
                        <button class="graden" onclick="Veerstegraad()"><img height="40px" width="40px" src="images/12.png"/> 1ste graad</button>
                        <button class="graden" onclick="Vtweedegraad()"><img height="40px" width="40px" src="images/34.png"/> 2de graad</button>       
                        <button class="graden" onclick="Vderdegraad()"><img height="40px" width="40px" src="images/56.png"/> 3de graad</button> 
                    </blockquote>
                </div>
            </div>
    </body>
</div>
<footer>
    <?php include("includes/Template_f.php"); ?>
</footer>
</html>