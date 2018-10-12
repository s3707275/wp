<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Checkout';
top_module($pageTitle);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
//    echo "<h2>name $name</h2>";
    $email = test_input($_POST["email"]);
    //echo "<h2>{$records[1][2]}</h2>";
    $address = test_input($_POST["address"]);
    //echo "<h2>{$records[1][2]}</h2>";
    $mphone = test_input($_POST["mphone"]);
    //echo "<h2>{$records[1][2]}</h2>";
    $card = test_input($_POST["card"]);
    //echo "<h2>{$records[1][2]}</h2>";
    $expiary = test_input($_POST["expiary"]);
    //echo "<h2>{$records[1][2]}</h2>";
}



?>



<form id="usrform" method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>">
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
