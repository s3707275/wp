<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Cart';
top_module($pageTitle);

if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
    // server side code is required here to validate and check if
    //  - qty is a positive integer (ie 1 or more)
    //  - product/service and option ids are valid
    if($_POST['qty'] > 0){
        if($_POST['id'] == 'F100' || $_POST['id'] == 'F200' || $_POST['id'] == 'F300'){
            $id = $_POST['id'];
            $oid = $_POST['oid'];
            $qty = $_POST['qty'];
            $_SESSION[$id][$oid] = $_POST;
            $total = 0;
        }
    }
}
//var_dump($_SESSION);

echo "<h1>Cart</h1>";
echo "<table>";
echo "<tr id='headings'><td>Quantity</td><td>Item Name</td><td>Option</td><td>Price</td></tr>";
// MEBLOURNE FLIGHTS
if(isset($_SESSION['F100']['ALT']))
    echo "<tr><td>$qty</td><td>Melbourne City Flight</td><td>Adult</td><td>peice</td></tr>";
if(isset($_SESSION['F100']['CLD']))
    echo "<tr><td>$qty</td><td>Melbourne City Flight</td><td>Child</td><td>price</td></tr>";
// YARRA VALLEY FLIGHTS
if(isset($_SESSION['F200']['ALT']))
    echo "<tr><td>$qty</td><td>Yarra Valley Flight</td><td>Adult</td><td>$300</td></tr>";
if(isset($_SESSION['F200']['CLD']))
    echo "<tr>$qty<td>Quantity</td><td>Yarra Valley Flight</td><td>Child</td><td>$300</td></tr>";
// AERIAL ADVERTISING
if(isset($_SESSION['F300']['MOM']))
    echo "<tr><td>$qty</td><td>Aerial Advertising</td><td>Monster Mike</td><td>$200</td></tr>";
if(isset($_SESSION['F300']['UNI']))
     echo "<tr><td>$qty</td><td>Aerial Advertising</td><td>RMIT</td><td>($qty*200)</td></tr>";
echo "</table>";


?>

<span class="reasons">$<span></span></span>

<form id="purchase" onsubmit="formSubmit()" action="checkout.php" method="post">
    <button type="submit">Buy Now</button></br>
    <button name="reset" onclick="location.href='services.php?id=reset'" type="button">RESET</button>
</form>




<?php end_module(); ?>
