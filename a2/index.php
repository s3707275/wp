<!DOCTYPE html>
<html lang='en'>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
</head>

<body>

    <nav>
        <ul class="navbar">
            <li class="navelement"><a class="navlink" href="index.php">Home</a></li>
            <li class="navelement"><a class="navlink" href="melbourne.php">Melbourne Flights</a></li>
            <li class="navelement"><a class="navlink" href="yarra_valley.php">Yarra Valley Flights</a></li>
            <li class="navelement"><a class="navlink" href="advertising.php">Aerial Advertising</a></li>
            <li class="navelement"><a class="navlink" href="" target="_blank">About Us</a></li>
        </ul>
    </nav>

    <div id="mainbody">
        <header>
            <img id="headerphoto" src="../../media/PTB/header.png" alt="Panorama of hot air balloons in flight, with company logo" usemap="logomap" />
            <map name="logomap">
                <area shape="rect" coords="0,0,450,200" alt="PTB logo" href="index.php">
            </map>
        </header>
        <main>

            <h2 class="areatitle">MELBOURNE</h2>

            <div class="picturebox">
                <img class="photolinks" src='../../media/PTB/Melbourne.jpeg' alt='Melbourne Ballooning Picture/Link' />
                <a href="melbourne.php">
                    <div class="phototext">
                        <div class="text">Melbourne Flights</div>
                    </div>
                </a>
            </div>
            <p> Come fly with us over the beautiful Melbourne skyline and enjoy views such as; the MCG, Eureka Tower and RMIT University.</p>

            <h2 class="areatitle">YARRA VALLEY</h2>
            <div class="picturebox">
                <img class="photolinks" src='../../media/PTB/YarraValley.jpeg' alt='Yarra Valley Ballooning Picture/Link' />
                <a href="yarra_valley.php">
                    <div class="phototext">
                        <div class="text">Yarra Valley Flights</div>
                    </div>
                </a>
            </div>
            <p>The most iconic way to the see the stunning Yarra Valley, watch the sunrise over lucious vineyards and farms. Who knows, you might even see a kangaroo too!</p>


            <h2 class="areatitle">AERIAL ADVERTISING</h2>
            <div class="picturebox">
                <img class="photolinks" src='../../media/PTB/footy.jpg' alt='Carlton Pot Special Shape Balloon over MCG' />
                <a href="advertising.php">
                    <div class="phototext">
                        <div class="text">Aerial Advertising</div>
                    </div>
                </a>
            </div>
            <p>Looking to advertise your company in an original, exciting way? Take advantage of our special shape balloons to promote your business. We offer a range of services to cater to all businesses needs, find out how we can help elevate your business up, up and away!</p>

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

</html>
