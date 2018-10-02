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
            <div class="item-grid-container">

                <div class="sideimage"><img class="pictureingrid" src="../../media/PTB/startup.jpg" alt="Hot air balloons getting ready to take-off" /></div>
                <div class="iteminfo">
                    <h2>Yarra Valley Flight</h2>
                    <p>Drink in the stunning landscape of Victoria's wine region with a one hour flight over the Yarra Valley region, followed by a buffet breakfast at the Yarra Valley Lodge.</p>
                </div>
                <div class="itembutton">
                    <form id="ticketSaleForm" onsubmit="formSubmit()" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">

                        <input type=hidden name="id" value="F200" />
                        <label class="forminfo" for="quantitiybox">Ticket Selection: </label>
                        <select name="option" required>
                            <option value="" disabled selected>Select your option</option>
                            <option value="adult">Adult</option>
                            <option value="child">Child</option>
                        </select>

                        <br />

                        <label class="forminfo" for="quantitiybox">Tickets: $300 pp </label>
                        <button id="minus">−</button>
                        <input class="quantitybox" type="number" name="qty" value="0" id="quantity" min="1" required />
                        <button id="plus">+</button>

                        <br />
                        <input id="submit" type="submit" value="Buy Now">

                    </form>
                </div>
                <div class="topimage"><img class="pictureingrid" src="../../media/PTB/sunrise_balloons.jpg" alt="Hot air balloons flying over the Yarra Valley skyline at sunrise" /></div>
                <!-- https://www.wowamazing.com/talent/photography/the-most-stunning-photos-of-hot-air-balloon-festivals-from-all-over-the-world/ -->
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
<script src="buttonscript.js"></script>
<script>
    document.getElementById("wireframecss").disabled = true;

</script>

</html>
