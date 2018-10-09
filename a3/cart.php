<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Cart';
top_module($pageTitle);

$id = $oid = $qty = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>POST</h1>";
  $id = $_POST["id"];
  $oid = $_POST["oid"];
  $qty = $_POST["qty"];
}

echo "<p> add = " . $_POST["add"] . "</p>";
echo "<p> id = " . $id . "</p>";
echo "<p> oid = " . $oid . "</p>";
echo "<p> qty = " . $qty . "</p>";


if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
  // server side code is required here to validate and check if
  //  - qty is a positive integer (ie 1 or more)
  //  - product/service and option ids are valid
        if ($POST['qty'] > 0){

            if ($POST['id'] == "F100")
               if ($POST['oid'] == "ALT"){
                    $_SESSION['cart'][$id]['oid'] = $oid;
                    $_SESSION['cart'][$id]['qty'] = $qty;
                }
                elseif ($POST['oid' == "CLD"]){
                    $_SESSION['cart'][$id]['oid'] = $oid;
                    $_SESSION['cart'][$id]['qty'] = $qty;
                }
            elseif ($POST['id'] == "F200")
                if ($POST['oid'] == "ALT"){
                    $_SESSION['cart'][$id]['oid'] = $oid;
                    $_SESSION['cart'][$id]['qty'] = $qty;
                    }
                elseif ($POST['oid' == "CLD"]){
                    $_SESSION['cart'][$id]['oid'] = $oid;
                    $_SESSION['cart'][$id]['qty'] = $qty;
                }
            elseif ($POST['id'] == "F300")
                if ($POST['oid'] == "MOM"){
                    $_SESSION['cart'][$id]['oid'] = $oid;
                    $_SESSION['cart'][$id]['qty'] = $qty;
                }
                elseif ($POST['oid' == "UNI"]){
                    $_SESSION['cart'][$id]['oid'] = $oid;
                    $_SESSION['cart'][$id]['qty'] = $qty;
                }
            else
                echo "<p> invalid - please try again </p>";
        }
//  $_SESSION['cart'][$id]['oid'] = $oid;
//  $_SESSION['cart'][$id]['qty'] = $qty;
    echo "<p> session id = " . $_SESSION['cart'][$id]['oid'] . "</p>";
    echo "<p> session oid = " . $_SESSION['cart'][$id]['qty'] . "</p>";
    echo "<p> session qty = " . $_SESSION['cart'][$id] . "</p>";

}



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
