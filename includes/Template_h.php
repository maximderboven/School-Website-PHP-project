<!--
Theme Name: KASO MORTSEL
Author: Derboven Maxim
Author URL: 
Description: The standard header/navbar for Kaso Mortsel
Version: 1.0
Text Domain: kaso-mortsel
-->
<!DOCTYPE html>
<html>

    <!-- File links -->
    <link rel="stylesheet" type="text/css" href="/KaSO-Mortsel/includes/Styles/Stylesheet_h.css" />

    <head>
        <!-- Titel variabele PHP -->
        <title><?php echo $PAGE_TITLE; ?></title>
        <!-- Schaal op devices aanpassen -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body style="overflow-y: scroll;">

        <!-- HEADER -->
        <div id="Header">

            <!--Nav bar -->
            <div id="navbar" class="navbar">
                <!-- logo aan linkerkant -->
                <img id="logo" src="/KaSO-Mortsel/includes/images/Icon.png" alt="Icon">
                <!-- Links aan de rechter kant -->
                <div id="navbar-right">
                    <a href="/KaSO-Mortsel/index.php">Algemeen</a>     
                    <a href="/KaSO-Mortsel/inschrijvingen.php">Inschrijvingen</a>
                    <a href="/KaSO-Mortsel/studieaanbod.php">Studieaanbod</a> 
                    <a href="/KaSO-Mortsel/informatie.php">Informatie</a>
                    <a href="/KaSO-Mortsel/contact.php">Contact</a>
                    <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a> -->
                </div>
            </div>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("navbar");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } else {
                    x.className = "navbar";
                }
            }
        </script>
        <!-- END nav bar & header -->

        <!-- plaats maken voor de bovenbalk zodat tekst er niet onder glipt -->
        <div class="Main" style="">

            <!-- TOP knop die verschijnt -->
            <button onclick="topFunction()" id="Top" title="Terug naar boven"><b>↑</b></button>

            <!-- Content page -->
        </div>

        <!-- einde content page: MAIN -->
        <!-- Scripts -->
        <script>
            // Als de gebruiker scrollt past het formaat zich aan Dit is voor na het scrollen
            // scrollFunction is voor de navbar en scrollFunction2 is voor TOP knop
            window.onscroll = function () {
                scrollFunction(), scrollFunction2()
            };

            function scrollFunction() {
                // NA 80 PX GESCROLL NAAR KLEIN FORMAAT
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    //NAVBAR VOOR KLEIN FORMAAT TE CHECKEN
                    document.getElementById("navbar").style.padding = "10px 30px";
                    // LOGO VAN GROTE VERANDEREN
                    document.getElementById("logo").style.height = "75px";
                    document.getElementById("logo").style.width = "75px";
                } else {
                    // TERUG SCROLLE NAAR BOVEN
                    document.getElementById("navbar").style.padding = "65px 30px";
                    // LOGO FORMAAT TERUG NORMAAL
                    document.getElementById("logo").style.height = "175px";
                    document.getElementById("logo").style.width = "175px";
                }
            }
        </script>
        <script>
            // user scrollt 20px naar beneden Top komt te voorschijn
            function scrollFunction2() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("Top").style.display = "block";
                } else {
                    document.getElementById("Top").style.display = "none";
                }
            }

            // Wanner er op de knop wordt geklikt
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <script>
            // BRON/ INTERNET 
            // F12 Disabelen
            document.onkeypress = function (event) {
                event = (event || window.event);
                if (event.keyCode == 123) {
                    //alert('No F-12');
                    alert("Copyright, Maxim Derboven All rights reserved.");
                    return false;
                }
            }
            document.onmousedown = function (event) {
                event = (event || window.event);
                if (event.keyCode == 123) {
                    //alert('No F-keys');
                    return false;
                }
            }
            document.onkeydown = function (event) {
                event = (event || window.event);
                if (event.keyCode == 123) {
                    //alert('No F-keys');
                    return false;
                }
            }
        </script>
        <script>
            // BRON: IBNTERNET
            //right click disablen
            function clickIE() {
                if (document.all) {
                    return false;
                }
            }
            function clickNS(e) {
                if
                        (document.layers || (document.getElementById && !document.all)) {
                    if (e.which == 2 || e.which == 3) {
                        alert("Copyright, Maxim Derboven All rights reserved.");
                        return false;
                    }
                }
            }
            if (document.layers)
            {
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown = clickNS;
            } else {
                document.onmouseup = clickNS;
                document.oncontextmenu = clickIE;
            }
            document.oncontextmenu = new Function("return false")
        </script>
        <!-- nog ctrl c, ctrl U, ctrl shift i -->
    </body>
</html>