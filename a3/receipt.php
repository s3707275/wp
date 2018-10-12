<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Receipt';
top_module($pageTitle);

$list = "";
$list = date("Y/m/d");
foreach ($_SESSION as $id){
    $list = $list . "," . "name";
    $list = $list . "," . "email";
    $list = $list . "," . "mobile";
    $list = $list . "," . "address";
    foreach($id as $oid)
        foreach($oid as $info)
            if($info != 'Add to Cart'){
                $list = $list . "," . $info;
                if($info == 'F100')
                    $unitprice = 400;
                 elseif($info == 'F200')
                     $unitprice = 300;
                elseif($info == 'F300')
                    $unitprice = 250;
            }
    $list = $list . "," . $unitprice;
    $list = $list . "," . "subtotalPrice";

    $data = explode(',', $list);
//
//$file = fopen("orders.txt", 'w');
//flock($file, LOCK_EX);
foreach ($data as $line)
    echo "<p>$line</p><br>";
//    fputcsv($file, $line);
//fclose($file);
}



echo $_POST['name'];

?>


<?php end_module(); ?>
