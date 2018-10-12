<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Receipt';
top_module($pageTitle);
?>

<label class="forminfo" id="price" for="quantitiybox">$400</label>
<button id="minus">−</button>
<input class="quantitybox" type="number" name="qty" value="0" id="qty" min="1" required />
<button id="plus" onclick="increment()">+</button>

<?php end_module(); ?>
