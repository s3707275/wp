<?php
session_start();
include_once('tools.php');
topModule();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css">
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
</head>

<body>

    <nav>
        <ul class="navbar">
            <li class="navelement"><a class="navlink" href="index.php">Home</a></li>
            <li class="navelement"><a class="navlink" href="services.php">Services</a></li>
            <li class="navelement"><a class="navlink" href="melbourne.php">Melbourne Flights</a></li>
            <li class="navelement"><a class="navlink" href="yarra_valley.php">Yarra Valley Flights</a></li>
            <li class="navelement"><a class="navlink" href="advertising.php">Aerial Advertising</a></li>
            <li class="navelement"><a class="navlink" href="login.php">Login</a></li>
        </ul>
    </nav>

    <div id="mainbody">
        <header>
            <img id="headerphoto" src="../../media/PTB/header.png" alt="Panorama of hot air balloons in flight, with company logo" usemap="logomap" />
            <!-- https://www.wowamazing.com/talent/photography/the-most-stunning-photos-of-hot-air-balloon-festivals-from-all-over-the-world/ -->
            <map name="logomap">
                <area shape="rect" coords="0,0,450,200" alt="PTB logo" href="index.php">
            </map>
        </header>

        <main>

            <div class="grid-container">

                <div class="item1">
                    <h2 class="areatitle">MELBOURNE</h2>
                    <p> Come fly with us over the beautiful Melbourne skyline and enjoy views such as; the MCG, Eureka Tower and RMIT University. The perfect way to celebrate any occasion.</p>
                </div>

                <div class="item2">
                    <div class="picturebox">
                        <img class="photolinks" src='../../media/PTB/Melbourne.jpeg' alt='Melbourne Ballooning Picture/Link' />
                        <a href="melbourne.php">
                            <div class="phototext">
                                <div class="text">Melbourne Flights</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item3">
                    <div class="picturebox">
                        <img class="photolinks" src='../../media/PTB/YarraValley.jpeg' alt='Yarra Valley Ballooning Picture/Link' />
                        <a href="yarra_valley.php">
                            <div class="phototext">
                                <div class="text">Yarra Valley Flights</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item4">
                    <h2 class="areatitle">YARRA VALLEY</h2>
                    <p>The most iconic way to the see the stunning Yarra Valley, watch the sunrise over lucious vineyards and farms. Who knows, you might even see a kangaroo too!</p>
                </div>

                <div class="item5">
                    <h2 class="areatitle">AERIAL ADVERTISING</h2>
                    <p>Looking to advertise your company in an original, exciting way? Take advantage of our special shape balloons to promote your business. We offer a range of services to cater to all businesses needs, find out how we can help elevate your business up, up and away!</p>
                </div>

                <div class="item6">
                    <div class="picturebox">
                        <img class="photolinks" src='../../media/PTB/footy.jpg' alt='Carlton Pot Special Shape Balloon over MCG' />
                        <a href="advertising.php">
                            <div class="phototext">
                                <div class="text">Aerial Advertising</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id="phonenumber">
                <h1 id="phone">Call us on (03) 9429 0277 or send <br />an email to info@picturethisballooning.com.au</h1>
            </div>


        </main>

        <footer>
            <div>&copy;<script>
                    document.write(new Date().getFullYear());

                </script> Jonathan Diver, s3707275.</div>
            <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
            <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
        </footer>
    </div>

</body>
<script>document.getElementById("wireframecss").disabled=true;</script>
</html>
