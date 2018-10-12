<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Checkout';
top_module($pageTitle);
?>



<form id="usrform">
    <label class="formheadings" for="name">Name</label>
    <input type="text" id="name" name="name">
    <label class="formheadings" for="email">Email</label>
    <input type="email" id="email" name="email">
    <label class="formheadings" for="address">Address</label><br>
    <textarea id="address" name="address"></textarea><br>
    <label class="formheadings" for="mphone">Mobile Phone</label>
    <input type="text" id="mphone" name="mphone">
    <label class="formheadings" for="card">Credit Card</label>
    <img id="visa" src='../../media/PTB/visa.png' alt='Visa Logo' />
    <input type="text" id="card" name="card">
    <label class="formheadings" for="expiary">Expiary Date</label>
    <input type="date" id="expiary" name="expiary">
    <br><br>
    <input type="submit" value="Submit">
</form>



<!--
<form id="information" onsubmit="formSubmit()" action="receipt.php" method="post">
  <fieldset>
    <legend>Passenger information:</legend>
    Name:<br>
    <input type="text" name="firstname" value="">
    <br><br>
    Email:<br>
    <input type="email" name="email" value="">
    <br><br>
    Address:<br>
    <input type="textarea" name="address" value="">
    <br><br>
    Mobile Phone:<br>
    <input type="text" name="phone" value="">
    <br><br>
    Credit Card:<br>
    <input type="text" name="creditcard" value="">
    <br><br>
    Expiary Date:<br>
    <input type="date" name="expiary" value="">
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
-->

<?php end_module(); ?>
