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

    <header>
        <div> <img src='../media/PTB/ptb%20logo.png' alt='Picture This Ballooning logo' height="150" /> </div>
    </header>

    <nav>
        <div>"Home" - - "Melbourne" - - "Yarra Valley" - - "Aerial Advertising" - - "About Us" thank you trevor</div>
    </nav>

    <main>
        <div class="grid-container">
            <div class="grid-item">
                <h2 class="area-title">MELBOURNE</h2>
                <img id="MelbourneBalloon" src='../../media/PTB/Melbourne.jpeg' alt='Melbourne Ballooning Picture/Link' height="500" width="420" />
            </div>
            <div class="grid-item">
                <h2 class="area-title">YARRA VALLEY</h2>
                <img id="YVBalloon"src='../../media/PTB/YarraValley.jpeg' alt='Yarra Valley Ballooning Picture/Link' height="500" width="420" />
            </div>
            <div class="grid-item">
                <h2 class="area-title">AERIAL ADVERTISING</h2>
                <img id="AdvertisingBalloon" src='../../media/PTB/CARLTON_POT.jpg' alt='Carlton Pot Special Shape Balloon over MCG' height="500" width="420" />
            </div>
            <div class="grid-item">
                Come fly with us over the beautiful Melbourne skyline and enjoy views such as; the MCG, Eureka Tower and RMIT University.
            </div>
            <div class="grid-item">
                The most iconic way to the see the stunning Yarra Valley, watch the sunrise over lucious vineyards and farms. Who knows, you might even see a kangaroo too!
            </div>
            <div class="grid-item">
                Looking to advertise your company in an original, exciting way? Take advantage of our special shape balloons to promote your business. We offer a range of services to cater to all businesses needs, find out how we can help elevate your business up, up and away!
            </div>
        </div>
    </main>

    <footer>
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script> Jonathan Diver, s3707275.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
