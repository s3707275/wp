<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Receipt';
top_module($pageTitle);

$qty = 3;
$total = price($qty, 400);
echo $total;
?>


<?php end_module(); ?>
