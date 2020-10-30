<!DOCTYPE html>
<html>
    <head>
        <?php include('../includes/Template_h.php'); ?>
        <title>KaSO-Mortsel <?php $row['title'] ?></title>
    </head>
    <body>
        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="news.css" />
        <!-- Add icon library -->
        <!-- Hero Image -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="row">
            <div id="Main">
                <div class="column left">
                    <p class="one"> Informatie </p>
                    <!-- Content -->
                    <div class="inforechts"  width="100%">
                        <a href="../newsitems/news3.php" class="previous">&laquo; Previous</a><a href="../newsitems/news4.php" class="next">Next &raquo;</a>
                        <?php
                        require_once '../admin/config.php';
// Attempt select query execution
                        $sql = "SELECT * FROM news WHERE id=3";
                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<h1 style='margin-bottom: 15px; padding: 0px 0px 0px 10px;'>" . $row['title'] . "</h1>";
                                    echo "<p style='margin-bottom: 15px;'>" . $row['text'] . "</p>";
                                    echo "<img  class='Infofoto' src='../admin/uploads/images/" . $row['image'] . "' /><br>";
                                    echo "<p style='font-size: 15px; font-style: italic; margin: 0px 0px 0px 10px;'>" . $row['caption'] . "</p><br>";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo "Geen nieuws op het moment.";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
// Close connection
                        mysqli_close($link);
                        ?>

                        <!-- Plaats deze tag bovenaan of vlak voor je laatste inhoudstag. -->
                        <script src="https://apis.google.com/js/platform.js" async defer>
                            {
                                lang: 'nl'
                            }
                        </script>

                        <!-- Plaats deze tag waar je de knop 'delen' wilt weergeven. -->
                        <div class="g-plus" data-action="share" data-annotation="none" data-href="http://localhost/KaSO-Mortsel/newsitems/news1.php"></div>
                        <div id="fb-root"></div>
                        <script async defer src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v3.2"></script>
                        <div class="fb-share-button" data-href="http://localhost/KaSO-Mortsel/newsitems/news1.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FKaSO-Mortsel%2Fnewsitems%2Fnews1.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Delen</a></div>
                    </div>
                </div>
                <div class="column right">
                    <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                    <p class="one"> Navigatie</p>
                    <blockquote class="inforechts">
                        <?php include '../includes/Template_informatieNAV.php' ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php include('../includes/Template_f.php'); ?>
    </footer>
</html>