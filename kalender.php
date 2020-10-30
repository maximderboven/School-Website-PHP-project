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
                    <p class="one"> Kalender </p>
                    <!-- Content -->
                    <blockquote class="inforechts">
                        <?php
                        require_once 'admin/config.php';
// Attempt select query execution
                        $vandaag = date("Y/m/d");
                        $sql = "SELECT * FROM kalender WHERE datum >= '$vandaag' ORDER BY datum ";
                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<b>" . $row['titel'] . "</b><br>";
                                    echo "<i>" . $row['datum'] . "</i><br>";
                                    echo $row['content'] . "<br>";
                                    echo "<hr>";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo "Er is zijn geen plannen gemaakt in het vooruitzicht.";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
// Close connection
                        mysqli_close($link);
                        ?>

                    </blockquote>
                </div>
                <div class="column right">
                    <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                    <p class="one"> Navigatie</p>
                    <blockquote class="inforechts">
                    <?php include("includes/Template_InformatieNAV.php") ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php include("includes/Template_f.php"); ?>
    </footer>
</html>