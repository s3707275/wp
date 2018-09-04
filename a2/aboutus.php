<!DOCTYPE html>
<html lang='en'>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
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
            <li class="navelement"><a class="navlink" href="aboutus.php">About Us</a></li>
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
            <p id="informationpage">If you have any questions or concerns, please call, email or drop into our office and talk to our staff who are happy to answer any of your questions.<br />
                <br />
                T:  +61 3 9429 0277<br />
                T:  +1300 UP AWAY (1300 87 2929) freecall<br />
                <br />
                E:  info@picturethisballooning.com.au<br />
                <br />
                Office Address:<br />
                12 Pilgrim Court<br />
                Ringwood 3134<br />
                Victoria<br />
                <br />
                Picture This Ballooning Pty Ltd<br />
                <br />
                A.B.N. 33 187 311 750<br />
                AIR OPERATORS CERTIFICATE NO: VT-565255-04</p>
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
