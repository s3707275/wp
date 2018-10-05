<?php
session_start();
$page_title = 'index';
include_once('tools.php');
top_module();
?>

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
            <input id="submit" type="submit" value="Add to Cart">

        </form>
    </div>
    <div class="topimage"><img class="pictureingrid" src="../../media/PTB/sunrise_balloons.jpg" alt="Hot air balloons flying over the Yarra Valley skyline at sunrise" /></div>
    <!-- https://www.wowamazing.com/talent/photography/the-most-stunning-photos-of-hot-air-balloon-festivals-from-all-over-the-world/ -->
</div>

<div id="phonenumber">
    <h1 id="phone">Call us on (03) 9429 0277 or send <br />an email to info@picturethisballooning.com.au</h1>
</div>

<?php end_module(); ?>
