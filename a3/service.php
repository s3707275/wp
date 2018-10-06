<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Melbourne Flight';
top_module($pageTitle);
?>

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

<?php end_module(); ?>
