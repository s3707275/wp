<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Services';
top_module($pageTitle);


$filename = "services.txt";
$fp = fopen($filename, "r");
flock($fp, LOCK_EX);
while ($line = fgets($fp))
  $records[] = explode("\t", $line);
flock($fp, LOCK_EX);
fclose($fp);
echo "<p>{$records[0][0]}</p>";
echo "<p>{$records[1][5]}</p>";
?>


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

<?php end_module(); ?>
