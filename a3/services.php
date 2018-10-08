<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Services';
top_module($pageTitle);


$filename = "services.txt";
$fp = fopen($filename, "r");
flock($fp, LOCK_EX);
while ($line = fgets($fp))
  $records[] = explode("\t", $line);
flock($fp, LOCK_EX);
fclose($fp);

//echo "<h2>{$records[1][2]}</h2>";

// 0. ID	1. OID	2. TITLE	3. SERVICE/S/ DESCRIPTION
// 4. SERVICE DESCRIPTION	5. OPTION	6. PRICE
// 1. Melbourne adult
// 2. Melbourne child
// 3. Yarra Valley adult
// 4. Yarra Valley child
// 5. Aerial Advertising mike
// 6. Aerial Advertising rmit
services_grid();
?>



<?php end_module(); ?>
