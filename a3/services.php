<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Services';
if(isset($_GET['id']))
    session_unset();
top_module($pageTitle);

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
