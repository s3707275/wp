<?php

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "  var $arrName = {\n";
  foreach ($arr as $key => $value) {
    echo "$lineEnd    $key : $value";
    $lineEnd = ",\n";
  }
  echo "  \n};\n";
  echo "</script>\n\n";
}

function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME'];
  $bits = explode('/',$here);
  $filename = $bits[count($bits)-1];
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}


function top_module($pageTitle) {
    $html = <<<OUTPUT
    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat"     rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
        <meta charset="utf-8">
        <title>$pageTitle</title>
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css">
        <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
        <script src='../wireframe.js'></script>
    </head>

    <body>
    <nav>
        <ul class="navbar">
            <li class="navelement"><a class="navlink" href="index.php">Home</a></li>
            <li class="navelement"><a class="navlink" href="services.php">Services</a></li>
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
OUTPUT;
        echo $html;
}

function end_module() {
    $html = <<<OUTPUT

    <div id="phonenumber">
    <h1 id="phone">Call us on (03) 9429 0277 or send <br />an email to info@picturethisballooning.com.au</h1>
    </div>
    </main>
    <footer>
        <div>&copy;<script>document.write(new Date().getFullYear());
        </script> Jonathan Diver, s3707275.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
        <button><a href="services.txt" target="_blank">Link to Spreadsheet</a></button>
        </footer>
    </div>
    </body>
    <script>document.getElementById("wireframecss").disabled = true;</script>
    </html>
OUTPUT;
        echo $html;
}

function services_grid() {
    $html = <<<OUTPUT

    <div class="grid-container">

    <div class="item1">

        <h2 class="areatitle">MELBOURNE</h2>
        <p> Come fly with us over the beautiful Melbourne skyline and enjoy views such as; the MCG, Eureka Tower and RMIT University. The perfect way to celebrate any occasion.</p>
    </div>

    <div class="item2">
        <div class="picturebox">
            <img class="photolinks" src='../../media/PTB/Melbourne.jpeg' alt='Melbourne Ballooning Picture/Link' />
            <a href="service.php?id=F100">
                <div class="phototext">
                    <div class="text">Melbourne Flights</div>
                </div>
            </a>
        </div>
    </div>

    <div class="item3">
        <div class="picturebox">
            <img class="photolinks" src='../../media/PTB/YarraValley.jpeg' alt='Yarra Valley Ballooning Picture/Link' />
            <a href="service.php?id=F200">
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
            <a href="service.php?id=F300">
                <div class="phototext">
                    <div class="text">Aerial Advertising</div>
                </div>
            </a>
        </div>
    </div>
    </div>

OUTPUT;
    echo $html;
}

function single_service($records[][]) {
    $html = <<<OUTPUT

    <div class="item-grid-container">
    <div class="sideimage"><img class="pictureingrid" src="../../media/PTB/melbourne2.jpg" alt="Hot air balloons flying over MCG" /></div>
    <div class="iteminfo">
        <h2>Melbourne City Flight</h2>
        <p>A one hour flight over the city, followed by a buffet breakfast on the 35 foor of the Sofitel Hotel.</p>
    </div>

    <div class="itembutton">

        <form id="ticketSaleForm" onsubmit="formSubmit()" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">

            <input type=hidden name="id" value="F100" />
            <label class="forminfo" for="quantitiybox">Ticket Selection: </label>
            <select name="option" required>
                <option value="" disabled selected>Select your option</option>
                <option value="adult">Adult</option>
                <option value="child">Child</option>
            </select>

            <br />

            <label class="forminfo" for="quantitiybox">Tickets: $400 pp </label>
            <button id="minus">−</button>
            <input class="quantitybox" type="number" name="qty" value="0" id="quantity" min="1" required />
            <button id="plus">+</button>

            <br />
            <input id="submit" type="submit" value="Add to Cart">

        </form>
    </div>
    <div class="topimage"><img class="pictureingrid" src="../../media/PTB/melbournepano.jpg" alt="Hot air balloons flying over Melbourne skyline at sunrise" /></div>
</div>

OUTPUT;
    echo $html;
}

?>
