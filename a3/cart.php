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
        }
    }
}
//  $_SESSION['cart'][$id]['oid'] = $oid;
//  $_SESSION['cart'][$id]['qty'] = $qty;
    echo "<p> session oid = " . $_SESSION['cart'][$id]['oid'] . "</p>";
    echo "<p> session qty = " . $_SESSION['cart'][$id]['qty'] . "</p>";
    echo "<p> session id = " . $_SESSION['cart'][$id] . "</p>";

var_dump($_SESSION);



echo "<table>";
  for ( $i=1; $i<=6; $i++ ) // rows
  {
    echo "<tr>";
    for ( $j=1; $j<=4; $j++ ) // cells
    {
      echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
  }
echo "</table>";

?>

<?php end_module(); ?>
