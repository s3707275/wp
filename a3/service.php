<?php
session_start();
include_once('tools.php');


// reads file in
$filename = "services.txt";
$fp = fopen($filename, "r");
flock($fp, LOCK_EX);
while ($line = fgets($fp))
  $records[] = explode("\t", $line);
flock($fp, LOCK_EX);
fclose($fp);

$id = array($records[1][0], $records[3][0], $records[5][0]);
// validation of page, check if it exists then if its equal to a real id
if(isset($_GET['id']))
    if($_GET['id'] == $id[0]){
        $pageTitle = 'PTB - ' . $records[1][2];
        top_module($pageTitle);
        melbourne_service();
    }

    elseif($_GET['id'] == $id[1]){
        $pageTitle = 'PTB - ' . $records[3][2];
        top_module($pageTitle);
        yarravalley_service();
    }

    elseif($_GET['id'] == $id[2]){
        $pageTitle = 'PTB - ' . $records[5][2];
        top_module($pageTitle);
        advertising_service();
    }

    else {
    header('Location: services.php');
        die();
}
else {
    header('Location: services.php');
        die();
}
?>


<?php end_module(); ?>
