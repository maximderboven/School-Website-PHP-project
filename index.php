<?php include("includes/a_config.php"); ?>
<?php
setlocale(LC_ALL, 'nl_NL');
                            date_default_timezone_set("Europe/Brussels");
                            $vandaag = date("Y-m-d"); //string vandaag 08/09/2019
?>
<!DOCTYPE html>
<html>
    
    <head>
        <!-- Header include different file -->
        <?php include("includes/Template_h.php"); ?>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135457731-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-135457731-1');
        </script>
        
        <script type="text/javascript" id="cookieinfo"
                src="//cookieinfoscript.com/js/cookieinfo.min.js"
                data-bg="#0C2C56"
                data-fg="#FFFFFF"
                data-link="#ccc"
                data-cookie="CookieInfoScript"
                data-text-align="left"
                data-close-text="Sluiten"
                data-height="80px"
                data-divlinkbg="#ccc"
                data-message="Deze website gebruikt cookies, die nodig zijn voor het functioneren van de site en voor het bereiken van de in het cookiebeleid aangegeven doelen. Door het sluiten van deze banner, het scrollen op deze pagina, het klikken op een koppeling of door op een andere manier verder te gaan met bladeren, gaat u akkoord met het gebruik van cookies."
                data-linkmsg="Meer info">
        </script>
        
    </head>
    
    <body>
        
        <!-- File links -->
        <link rel="stylesheet" type="text/css" href="styles/standard.css" />
        <link rel="stylesheet" type="text/css" href="styles/index.css" />
        
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
        
        <!-- Hero Image -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <div class="row">
            <div id="Main">
                <div class="column left">
                    <blockquote style="margin: 0px 10px 10px 0px; padding: 10px; background-color: #EFEEEE;">
                        <p>Als school geloven we er sterk in dat iedereen een zekere leergierigheid bezit en dat iedereen kan leren. </p>
                        <p>We zullen dan ook een belangrijke reisgenoot zijn van de leerlingen in hun ontdekkingstocht gedurende hun evolutie tot jongvolwassene! We willen een school zijn waarin iedereen zich thuis, veilig en gerespecteerd voelt. Alleen in zo’n omgeving kan er geleerd worden. <a href="informatie/visietekst.php" style=" all: unset; cursor: pointer!important; font-style: italic!important;" >Klik hier om de volledige visietekst te lezen!</a></p>
                    </blockquote>
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                                                <!-- Full-width images with number and caption text -->
                    <?php
                    require_once 'admin/config.php';
                    $sql = "SELECT * FROM homepageslides";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            $teller = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div class='mySlides fade'>";
                                echo "<div class='numbertext'><b>" . $teller .  "/" .  mysqli_num_rows($result) . "</b></div>";
                                echo "<img style='width: 100%; height: 100%; max-width: 828px; max-height: 450px; overflow: hidden;' src='admin/uploads/images/" . $row['image'] . "' style='width:99%'>";
                                echo "</div>";
                                $teller++;
                            }
                            if ($teller == 3)
                            {
                                                        echo "<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>";
                        echo "<a class='next' onclick='plusSlides(1)'>&#10095;</a>";
                            }
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>
                    </div>
                    <script>

                        var slideIndex = 1;
                        showSlides(slideIndex);

// Next/previous controls
                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

// Thumbnail image controls
                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            if (n > slides.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = slides.length
                            }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slides[slideIndex - 1].style.display = "block";
                        }
                    </script>
                    <p class="one"> Nieuws </p>
                    <!-- Content -->
                    <?php
// Attempt select query execution
                    $teller = 1;
                    $sql = "SELECT * FROM news";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<blockquote class='newsitems'>";
                                echo "<div class='item'>";
                                echo "<a href='newsitems/news$teller.php'>";
                                echo "<img style='border-radius: 8px; object-fit: cover; display: block; width: 100%; max-height='120px'; max-width=135px;'  src='admin/uploads/images/" . $row['image'] . "' />";
                                echo "<span class='caption'>" . $row['title'] . "</span>";
                                echo "</a>";
                                echo "</div>";
                                echo "</blockquote>";
                                $teller++;
                            }
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "Geen nieuws op het moment.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
// CNIET SLUITEN, WANT ER IS NOG EEN FUNCTIE
                    $sql = "SELECT titel FROM kalender WHERE belangrk=1 AND `datum` >= '$vandaag'ORDER BY datum desc"; 
                                if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $titelkalender =  $row['titel'];
                            }
                            }
                            // Free result set
                            mysqli_free_result($result);
                        }
                    ?>

                    <p class="one" style="float: left;"> Informatie <button class="btnmeer" onclick="location.href = 'informatie.php'" style="float: right; ">Meer</button></p>
                    <div class="row">
                        <div class="column2">
                            <i class="fa fa-binoculars fa-4x" id="under" aria-hidden="true"></i>
                            <h1 style="text-align: center; font-size: 22px">Vooruitzicht</h1>
                            <p style="text-align: center; font-size: 15px"><?php echo $titelkalender ?>, laten we samen aftellen.</p>
                            <p id="demo" style='text-align:center; font-size: 15px'></p>
                            <?php $sql = "SELECT datum FROM kalender WHERE belangrk=1 AND `datum` >= '$vandaag' ORDER BY datum desc"; 
                                if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $datumaftellen =  $row['datum'];
                            }
                            }
                            // Free result set
                            mysqli_free_result($result);
                        }
                                ?>
                            <script>
// Set the date we're counting down to
                                var countDownDate = new Date("<?php print date("M j, Y", strtotime($datumaftellen)) ?>").getTime();

// Update the count down every 1 second
                                var x = setInterval(function () {

                                    // Get todays date and time
                                    var now = new Date().getTime();

                                    // Find the distance between now and the count down date
                                    var distance = countDownDate - now;

                                    // Time calculations for days, hours, minutes and seconds
                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                    // Output the result in an element with id="demo"
                                    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                                            + minutes + "m " + seconds + "s ";

                                    // If the count down is over, write some text 
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = "";
                                    }
                                }, 1000);
                            </script>
                        </div>
                        <div class="column2">
                            <i class="fa fa-newspaper-o fa-4x" id="under" aria-hidden="true"></i>
                            <h1 style="text-align: center; font-size: 22px">Inschrijvingen</h1>
                            <p style="text-align: center; font-size: 15px">Inschrijven voor het schooljaar 2019-2020: alle informatie vindt u hier!</p>
                        </div>
                        <div class="column2">
                            <i class="fa fa-comments fa-4x" id="under" aria-hidden="true"></i>
                            <h1 style="text-align: center; font-size: 22px">Nieuwtjes</h1>
                            <p style="text-align: center; font-size: 15px">Smartschool is het nieuwe leerplatform van dit jaar.</p>

                        </div>
                    </div>
                </div>
                <div class="column right">
                    <!-- PADDING: BOVENpx RECHTSpx ONDERpx LINKSpx; -->
                    <p class="one"> Schoolregelement</p>
                    <blockquote class="inforechts">
                        <form method="get" action="files/schoolregelement2018-2019.pdf">
                            <button class="btndownload" type="submit"><i class="fa fa-download"></i> Download</button>
                        </form>
                    </blockquote>
                    <p class="one">Kalender</p>
                    <blockquote class="inforechts">
                        <div>
                            <?php
// Attempt select query execution
                            
                            $sql = "SELECT * FROM `kalender` WHERE `datum` >= '$vandaag' ORDER BY `datum` LIMIT 5";
                            if ($result = mysqli_query($link, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        
                                        $datum = $row['datum']; //String datum 08/09/2019
                                        $vndg = str_replace('-', '/', $vandaag);
                                        $morgen = date('Y-m-d',strtotime($vandaag . "+1 days"));
                                        
                                                        if ($datum == $vandaag) {
                                                            echo "<p class='datum'><b>Vandaag</b></p>";
                                                                }
                                                                else if ($datum == $morgen)
                                                                    {
                                                                    echo "<p class='datum'><b>Morgen</b></p>";
                                                                    }
                                                                    else
                                                                    {
                                                                    $datum = strtotime($row['datum']);
                                                                    echo "<p class='datum'><b>" . date('d M', $datum) . "</b></p>";
                                                                    }
                                        echo "<p style='font-size: 15px'><b>" . $row['titel'] . "</b></p>";
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
                        </div>
                        <button class="btnkalender" onclick="location.href = 'kalender.php'" > Meer </button>
                    </blockquote>
                    <p class="one"> Facebook</p>
                    <blockquote class="inforechts">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKasoMortsel%2F&tabs=timeline&width=250&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="232" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </blockquote>
                    <p class="one"> Google maps</p>
                    <blockquote class="inforechts">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.6803475056795!2d4.443395215915738!3d51.169682243160004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f0b01515d617%3A0xe8130f7a3627b88d!2sKaSO-Mortsel!5e0!3m2!1snl!2sbe!4v1551008458339" width="232" height="232" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </blockquote>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php include("includes/Template_f.php"); ?>
    </footer>
</html>