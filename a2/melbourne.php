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
            <map name="logomap">
                <area shape="rect" coords="0,0,450,200" alt="PTB logo" href="index.php">
            </map>
        </header>

        <main>
            <div class="item-grid-container">
                <div class="sideimage"><img class="pictureingrid" src="../../media/PTB/melbourne2.jpg" alt="Hot air balloons flying over MCG" /></div>
                <div class="iteminfo">
                    <h2>Melbourne City Flight</h2>
                    <p>A one hour flight over the city, followed by a buffet breakfast on the 35 foor of the Sofitel Hotel.</p>
                </div>

                <div class="itembutton">

                    <form id="ticketSaleForm" onsubmit="formSubmit()" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="get">

                        <label class="forminfo" for="quantitiybox">Ticket Selection: </label><select name="tickettype">
                            <option value="" disabled selected>Select your option</option>
                            <option value="adult">Adult</option>
                            <option value="child">Child</option>
                        </select>
                        <br/>

                        <label class="forminfo" for="quantitiybox">Tickets: $400 pp </label>
                            <button id="minus">−</button>
                            <input class="quantitybox" type="number" value="0" id="input" />
                            <button id="plus">+</button>

                        <br/>
                        <input id="submit" type="submit" value="Buy Now">

                    </form>
                </div>
                <div class="topimage"><img class="pictureingrid" src="../../media/PTB/melbournepano.jpg" alt="Hot air balloons flying over Melbourne skyline at sunrise" /></div>
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
