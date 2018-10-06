<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Cart';
top_module($pageTitle);


echo "<table>";
  for ( $i=1; $i<=12; $i++ ) // rows
  {
    echo "<tr>";
    for ( $j=1; $j<=12; $j++ ) // cells
    {
      echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
  }
echo "</table>";

?>

<?php end_module(); ?>
