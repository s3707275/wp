<?php
session_start();
$page_title = 'index';
include_once('tools.php');
top_module();
?>

<p id="advertisinginfo">Whether you are promoting happy hour with our Carlton pot, or a sausage sizzle fundraiser for your local footy club with our Sherin Footy, Picture This Ballooning has got you covered for all things aerial advertising.</p>

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
            <div class="advertising-grid-photos">Monster Mike</div>
            <div class="advertising-grid-photos">RMIT University</div>
        </div>


    </div>
    <div class="itembutton">
        <form id="ticketSaleForm" onsubmit="formSubmit()" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">

            <input type=hidden name="id" value="F300" />
            <label class="forminfo" for="quantitiybox">Ticket Selection: </label>
            <select name="option" required>
                <option value="" disabled selected>Select your option</option>
                <option value="monsterMike">Monster Mike</option>
                <option value="RMIT">RMIT</option>
            </select>

            <br />

            <label class="forminfo" for="quantitiybox">Cost: $250 per hour </label>
            <button id="minus">−</button>
            <input class="quantitybox" type="number" name="qty" value="0" id="quantity" min="1" required />
            <button id="plus">+</button>

            <br />
            <input id="submit" type="submit" value="Add to Cart">

        </form>
    </div>
    <div class="topimage"></div>
</div>

<div id="phonenumber">
    <h1 id="phone">Call us on (03) 9429 0277 or send <br />an email to info@picturethisballooning.com.au</h1>
</div>

<?php end_module(); ?>
