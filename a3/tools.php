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


    $filename = "services.txt";
    $fp = fopen($filename, "r");
    flock($fp, LOCK_EX);
    while ($line = fgets($fp))
    $records[] = explode("\t", $line);
    flock($fp, LOCK_EX);
    fclose($fp);

    $html = <<<OUTPUT

    <div class="grid-container">

    <div class="item1">

        <h2 class="areatitle">{$records[1][2]}</h2>
        <p>{$records[1][3]}</p>
    </div>

    <div class="item2">
        <div class="picturebox">
            <img class="photolinks" src='../../media/PTB/Melbourne.jpeg' alt='Melbourne Ballooning Picture/Link' />
            <a href="service.php?id={$records[1][0]}">
                <div class="phototext">
                    <div class="text">{$records[1][2]}</div>
                </div>
            </a>
        </div>
    </div>

    <div class="item3">
        <div class="picturebox">
            <img class="photolinks" src='../../media/PTB/YarraValley.jpeg' alt='Yarra Valley Ballooning Picture/Link' />
            <a href="service.php?id={$records[3][0]}">
                <div class="phototext">
                    <div class="text">{$records[3][2]}</div>
                </div>
            </a>
        </div>
    </div>

    <div class="item4">
        <h2 class="areatitle">{$records[3][2]}</h2>
        <p>{$records[3][3]}</p>
    </div>

    <div class="item5">
        <h2 class="areatitle">{$records[5][2]}</h2>
        <p>{$records[5][3]}</p>
    </div>

    <div class="item6">
        <div class="picturebox">
            <img class="photolinks" src='../../media/PTB/footy.jpg' alt='Carlton Pot Special Shape Balloon over MCG' />
            <a href="service.php?id={$records[5][0]}">
                <div class="phototext">
                    <div class="text">{$records[5][2]}</div>
                </div>
            </a>
        </div>
    </div>
    </div>

OUTPUT;
    echo $html;
}

function melbourne_service() {

    $filename = "services.txt";
    $fp = fopen($filename, "r");
    flock($fp, LOCK_EX);
    while ($line = fgets($fp))
    $records[] = explode("\t", $line);
    flock($fp, LOCK_EX);
    fclose($fp);

    $html = <<<OUTPUT

    <div class="item-grid-container">
    <div class="sideimage"><img class="pictureingrid" src="../../media/PTB/melbourne2.jpg" alt="Hot air balloons flying over MCG" /></div>
    <div class="iteminfo">
        <h2>{$records[1][2]}</h2>
        <p>{$records[1][4]}</p>
    </div>

    <div class="itembutton">

        <form id="ticketSaleForm" onsubmit="formSubmit()" action="cart.php" method="post">

            <input type=hidden name="id" value="{$records[1][0]}" />
            <label class="forminfo" for="quantitiybox">Ticket Selection: </label>
            <select name="oid" required>
                <option value="" disabled selected>Select your option</option>
                <option value="{$records[1][1]}">{$records[1][5]}</option>
                <option value="{$records[2][1]}">{$records[2][5]}</option>
            </select>

            <br />

            <label class="forminfo" for="quantitiybox">Tickets: $ {$records[1][6]} pp </label>
            <button id="minus">−</button>
            <input class="quantitybox" type="number" name="qty" value="0" id="quantity" min="1" required />
            <button id="plus">+</button>

            <br />
            <input id="submit" name="add" type="submit" value="Add to Cart">

        </form>
    </div>
    <div class="topimage"><img class="pictureingrid" src="../../media/PTB/melbournepano.jpg" alt="Hot air balloons flying over Melbourne skyline at sunrise" /></div>
</div>

OUTPUT;
    echo $html;
}

function yarravalley_service() {

    $filename = "services.txt";
    $fp = fopen($filename, "r");
    flock($fp, LOCK_EX);
    while ($line = fgets($fp))
    $records[] = explode("\t", $line);
    flock($fp, LOCK_EX);
    fclose($fp);

//    https://titan.csit.rmit.edu.au/~e54061/wp/cart.php?ref=service

    $html = <<<OUTPUT

    <div class="item-grid-container">

    <div class="sideimage"><img class="pictureingrid" src="../../media/PTB/startup.jpg" alt="Hot air balloons getting ready to take-off" /></div>
    <div class="iteminfo">
        <h2>{$records[3][2]}</h2>
        <p>{$records[3][4]}</p>
    </div>
    <div class="itembutton">
        <form id="ticketSaleForm" onsubmit="formSubmit()" action="cart.php" method="post">

            <input type=hidden name="id" value="{$records[3][0]}" />
            <label class="forminfo" for="quantitiybox">Ticket Selection: </label>
            <select name="oid" required>
                <option value="" disabled selected>Select your option</option>
                <option value="{$records[3][1]}">{$records[3][5]}</option>
                <option value="{$records[4][1]}">{$records[4][5]}</option>
            </select>

            <br />

            <label class="forminfo" for="quantitiybox">Tickets: $ {$records[3][6]} pp </label>
            <button id="minus">−</button>
            <input class="quantitybox" type="number" name="qty" value="0" id="quantity" min="1" required />
            <button id="plus">+</button>

            <br />
            <input id="submit" name="add" type="submit" value="Add to Cart">

        </form>
    </div>
    <div class="topimage"><img class="pictureingrid" src="../../media/PTB/sunrise_balloons.jpg" alt="Hot air balloons flying over the Yarra Valley skyline at sunrise" /></div>
    <!-- https://www.wowamazing.com/talent/photography/the-most-stunning-photos-of-hot-air-balloon-festivals-from-all-over-the-world/ -->
</div>

OUTPUT;
    echo $html;
}

function advertising_service() {

    $filename = "services.txt";
    $fp = fopen($filename, "r");
    flock($fp, LOCK_EX);
    while ($line = fgets($fp))
    $records[] = explode("\t", $line);
    flock($fp, LOCK_EX);
    fclose($fp);

    $html = <<<OUTPUT

    <p id="advertisinginfo">{$records[5][4]}</p>

<div class="item-grid-container">

    <div class="iteminfo">
        <h2 id="preadvertising">Check out the air up there...</h2>
        <h3>Advertise your business in a fresh and exciting way</h3>

        <div class="advertising-grid">
            <div class="advertising-grid-photos">
                <img class="advertising-photos" src="../../media/PTB/mike.jpg" alt="Monster mike flying high over melbourne" />
            </div>
            <div class="advertising-grid-photos">
                <img class="advertising-photos" src="../../media/PTB/RMIT3.jpg" alt="RMIT Balloon indoor inflation" />
            </div>
            <div class="advertising-grid-photos">{$records[5][2]}</div>
            <div class="advertising-grid-photos">{$records[6][2]}</div>
        </div>


    </div>
    <div class="itembutton">
        <form id="ticketSaleForm" onsubmit="formSubmit()" action="cart.php" method="post">

            <input type=hidden name="id" value="{$records[5][0]}" />
            <label class="forminfo" for="quantitiybox">Ticket Selection: </label>
            <select name="oid" required>
                <option value="" disabled selected>Select your option</option>
                <option value="{$records[5][1]}">Monster Mike</option>
                <option value="{$records[6][1]}">RMIT</option>
            </select>

            <br />

            <label class="forminfo" for="quantitiybox">Cost: $ {$records[6][6]} per hour </label>
            <button id="minus">−</button>
            <input class="quantitybox" type="number" name="qty" value="0" id="quantity" min="1" required />
            <button id="plus">+</button>

            <br />
            <input id="submit" name="add" type="submit" value="Add to Cart">

        </form>
    </div>
    <div class="topimage"></div>
</div>

OUTPUT;
    echo $html;
}

?>
