<!DOCTYPE html>
<html lang='en'>

<!-- This is a family business, all images (unless otherwise stated) have been by staff members, myself included, and I have permission to use them from CEO Damian Crock. -->

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
    <meta charset="utf-8">
    <title>Assignment 3</title>

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

            <p id="safetyinfo">We fly over the city of Melbourne, as well as the stunning Yarra Valley and Daylesford. <br />
                Before you fly, there are a few safety instructions you should know about. Click the picture below to watch our <span id="preflight">Pre-Flight Safety Video</span> to learn more.</p>

            <a href="https://vimeo.com/202144907" target="_blank"><img id="JC-photo" src="../../media/PTB/Jesus_Christ_Balloon.jpeg" alt="Jesus in flight over Sydney"/></a>

            <!-- Vimeo pro account needed to link, get real video from Damian "https://vimeo.com/202144907"
            <video src="https://www.youtube.com/watch?v=PxWIOzoZrIk"></video> -->

            <h3 class="reasons"><br />Three reasons to <span id="motto">fly away from the everyday</span></h3>
            <h3 class="reasons">1. Customer Service is our top priority</h3>
            <p>At Picture This Ballooning, we know that organising a flight with us can be a stressful experience, that;s why we have dedicated staff working around the clock to ensure you have the best experience possible.</p>
            <h3 class="reasons">2. Value for money</h3>
            <p>Not only are we the best company you can fly with, we're also the most afforadble to meaning we're the perfect gift for anyone.</p>
            <h3 class="reasons">3. Customer Reviews</h3>
            <p>Here at Picture This Ballooning we are dedicated to ensuring you have the best flight possible with us, but don't just take our word for it - see what our passengers have to say</p>
            <a class="reviewlink" href="https://www.facebook.com/PictureThisBallooning" target="_blank">5-Star Facebook Reviews</a>
            <br />
            <a class="reviewlink" href="https://www.tripadvisor.com.au/Attraction_Review-g255100-d2403199-Reviews-Picture_This_Ballooning_Melbourne_and_Yarra_Valley-Melbourne_Victoria.html" target="_blank">5-Star Trip Advisor Reviews</a>
            <br />
            <a class="reviewlink" href="https://www.google.com.au/search?q=picture+this+ballooning#lrd=0x6ad642ef8f010481:0xbf097180c6870eb0,1,,," target="_blank">5-Star Google Reviews</a>


            <div id="phonenumber">
                <h1 id="phone">Call us on (03) 9429 0277 or send <br />an email to info@picturethisballooning.com.au</h1>
            </div>

            <p id="informationpage"><br />If you have any questions or concerns, please call, email or drop into our office and talk to our staff who are happy to answer any of your questions.<br />
                <br />
                T: +61 3 9429 0277<br />
                T: +1300 UP AWAY (1300 87 2929) freecall<br />
                <br />
                E: info@picturethisballooning.com.au<br />
                <br />
                Office Address:<br />
                12 Pilgrim Court<br />
                Ringwood 3134<br />
                Victoria<br />
                <br />
                Picture This Ballooning Pty Ltd<br />
                A.B.N. 33 187 311 750<br />
                AIR OPERATORS CERTIFICATE NO: VT-565255-04
            </p>

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
<script>
    document.getElementById("wireframecss").disabled = true;

</script>

</html>
