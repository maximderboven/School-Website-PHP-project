<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL:
Description: The standard footer for Kaso Mortsel
Version: 1.0
Text Domain: kaso-mortsel
-->

<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("../includes/Template_h.php"); ?>
    </head>

    <body>

        <?php
        //OPHALEN ID'S IN LINK
        $ID1 = ((int) $_GET["ID1"]); //(int)
        $ID2 = ((int) $_GET["ID2"]);

        //CONNECTIE DATABANK GEGEVENS
        require_once '../admin/config.php';

        //SQL QUERY
        $sql = "select vo1.vormingsID, vo1.vormingnaam, vo1.jaarnaam as jaarnaam1, vo1.richtingnaam as richtingnaam1, vo1.vaknaam as vaknaam1, vo2.jaarnaam as jaarnaam2, vo2.richtingnaam as richtingnaam2, IFNULL(vo1.uren,0) as uren1, IFNULL(vo2.uren,0) as uren2
from vakkenoverzicht vo1
right join vakkenoverzicht vo2 on vo1.vakkenID=vo2.vakkenID
where vo1.richtingID=$ID1 AND vo1.jaarID=$ID2 AND vo2.richtingID=$ID1 AND vo2.jaarID=$ID2+1
order by vo1.vormingsID, vo1.jaarnaam desc, vo1.richtingnaam, vo1.vaknaam, vo1.uren";

        //LINK MAKEN EN QUERY UITVOEREN
        if ($result = mysqli_query($link, $sql)) {

            //KIJKEN NAAR GENOEG RIJEN
            if (mysqli_num_rows($result) > 0) {

                //RIJEN AFGAAN
                while ($row = mysqli_fetch_array($result)) {

                    //VOOR ELKE RIJ DEZE DATA PAKKEN
                    $jaarnaam1 = $row['jaarnaam1']; //String datum 08/09/2019
                    $jaarnaam2 = $row['jaarnaam2']; //String datum 08/09/2019
                    $richtingnaam1 = $row['richtingnaam1'];
                }

                // Free result set
                mysqli_free_result($result);
            } else {
                echo "Geen resultaten gevonden.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        ?>

        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="../styles/standard.css" />
        <link rel="stylesheet" type="text/css" href="studies.css" />

        <!-- META DATA -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <div class="row">
            <div id="Main">

                <div class="column left">

                    <p class="one"> lessenrooster <?php echo $richtingnaam1 . " (" . substr($jaarnaam1, -10) . ")" ?></p>                
                    <div class="inforechts">
                        <!-- TABLE OPVULLEN -->
                        <table><!-- tabel opendoen -->

                            <tr> <!-- Rij opendoen -->

                                <th><b> </b></th> <!-- KOLOM 1 -->
                                <th><b><?php echo substr($jaarnaam1, 0, 9) ?></b></th> <!-- KOLOM 2 -->
                                <th><b><?php echo substr($jaarnaam2, 0, 9) ?></b></th> <!-- KOLOM 3 -->

                            </tr> <!-- Rij sluiten -->

                            <?php
                            $vorigevorming = "";
                            $teller=0;
                            //LINK MAKEN EN QUERY UITVOEREN
                            if ($result = mysqli_query($link, $sql)) {

                                //KIJKEN NAAR GENOEG RIJEN
                                if (mysqli_num_rows($result) > 0) {

                                    //RIJEN AFGAAN
                                    while ($row = mysqli_fetch_array($result)) {
                                         // VARIABLEN TOEKENNEN
                                        $vak = $row['vaknaam1'];
                                        $uren1 = $row['uren1'];
                                        $uren2 = $row['uren2'];
                                        $vorming = $row['vormingnaam'];
                                        
                                        if ($teller==0)
                                        {
                                            echo "<tr>"; //RIJ OPENEN
                                            echo "<th><b>" . $vorming . "</b></th>"; //KOLOM 1
                                            echo "</tr>"; //RIJ OPENEN
                                            echo "<tr>"; //RIJ OPENEN
                                            echo "<th>" . $vak . "</th>"; //KOLOM 1
                                            echo "<th>" . ($uren1) . "</th>"; //KOLOM 2
                                            echo "<th>" . ($uren2) . "</th>"; //KOLOM 3
                                            echo "</tr>"; //RIJ SLUITEN
                                            $vorigevorming = $vorming;
                                            $teller++;
                                        } else {
                                        if ($vorming == $vorigevorming && $teller < mysqli_num_rows($result)) {
                                            echo "<tr>"; //RIJ OPENEN
                                            echo "<th>" . $vak . "</th>"; //KOLOM 1
                                            echo "<th>" . ($uren1) . "</th>"; //KOLOM 2
                                            echo "<th>" . ($uren2) . "</th>"; //KOLOM 3
                                            echo "</tr>"; //RIJ SLUITEN
                                            $vorigevorming = $vorming;
                                            $teller++;
                                        } else {
                                            echo "<tr>"; //RIJ OPENEN
                                            echo "<th><b>" . $vorming . "</b></th>"; //KOLOM 1
                                            echo "</tr>"; //RIJ OPENEN
                                            $vorigevorming = $vorming;
                                            $teller++;
                                        }
                                        if ($teller == mysqli_num_rows($result)) {
                                            echo "<tr>"; //RIJ OPENEN
                                            echo "<th>" . $vak . "</th>"; //KOLOM 1
                                            echo "<th>" . ($uren1) . "</th>"; //KOLOM 2
                                            echo "<th>" . ($uren2) . "</th>"; //KOLOM 3
                                            echo "</tr>"; //RIJ SLUITEN
                                        }
                                        }
                                    }
                                    // Free result set
                                    mysqli_free_result($result);
                                } else {
                                    echo "Geen resultaten gevonden.";
                                }
                            } else {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
// Close connection
                            mysqli_close($link);
                            ?>
                        </table>
                        <br>

                    </div>
                </div>
                <div class="column right">
                    <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                    <p class="one"> Informatie</p>
                    <blockquote class="inforechts">
                    </blockquote>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php include("../includes/Template_f.php"); ?>
    </footer>
</html>
