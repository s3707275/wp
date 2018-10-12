<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Cart';
top_module($pageTitle);

$money = $money1 = $money2 = $money3 = $money = $money5 = 0;

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
if(isset($_SESSION['F100']['ALT'])){
    $total = $_SESSION['F100']['ALT']['qty'];
    $money1 = price($total, 400);
    echo "<tr><td>{$_SESSION['F100']['ALT']['qty']}</td><td>Melbourne City Flight</td><td>Adult</td><td>$$money1.00</td></tr>";
}

if(isset($_SESSION['F100']['CLD'])){
    $total = $_SESSION['F100']['CLD']['qty'];
    $money2 = price($total, 400);
    echo "<tr><td>{$_SESSION['F100']['CLD']['qty']}</td><td>Melbourne City Flight</td><td>Child</td><td>$$money2.00</td></tr>";
}

// YARRA VALLEY FLIGHTS
if(isset($_SESSION['F200']['ALT'])){
    $total = $_SESSION['F200']['ALT']['qty'];
    $money3 = price($total, 300);
    echo "<tr><td>{$_SESSION['F200']['ALT']['qty']}</td><td>Yarra Valley Flight</td><td>Adult</td><td>$$money3.00</td></tr>";
}

if(isset($_SESSION['F200']['CLD'])){
    $total = $_SESSION['F200']['CLD']['qty'];
    $money4 = price($total, 300);
    echo "<tr><td>{$_SESSION['F200']['CLD']['qty']}</td><td>Yarra Valley Flight</td><td>Child</td><td>$$money4.00</td></tr>";
}

// AERIAL ADVERTISING
if(isset($_SESSION['F300']['MOM'])){
    $total = $_SESSION['F300']['MOM']['qty'];
    $money5 = price($total, 250);
    echo "<tr><td>{$_SESSION['F300']['MOM']['qty']}</td><td>Aerial Advertising</td><td>Monster Mike</td><td>$$money5.00</td></tr>";
}


if(isset($_SESSION['F300']['UNI'])){
    $total = $_SESSION['F300']['UNI']['qty'];
    $money6 = price($total, 250);
    echo "<tr><td>{$_SESSION['F300']['UNI']['qty']}</td><td>Aerial Advertising</td><td>RMIT</td><td>$$money6.00</td></tr>";
}

echo "</table>";
$fullTotal = $money + $money1 + $money2 + $money3 + $money + $money5;

echo "<h4>Total $$fullTotal.00</h4>";

?>
<h1 id="subtotals"></h1>
<form id="purchase" onsubmit="formSubmit()" action="checkout.php" method="post">
    <button class="formbutton" type="submit">Buy Now</button></br>
    <button class="formbutton" name="reset" onclick="location.href='services.php?id=reset'" type="button">RESET</button>
</form>




<?php end_module(); ?>
