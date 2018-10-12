<?php
session_start();
include_once('tools.php');
$pageTitle = 'PTB - Checkout';
top_module($pageTitle);

$name = $email = $address = $mphone = $card = $expiary = "";
$nameErr = $emailErr = $addressErr = $mphoneErr = $cardErr = $expiaryErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"]))
        $nameErr = " - Name is Required";
    else{
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
            $nameErr = " - Only letters and white space allowed";
    }


    if(empty($_POST["email"]))
        $emailErr = " - Email is Required";
    else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $emailErr = " - Invalid email format";
    }


    if(empty($_POST["address"]))
        $addressErr = " - Address is Required";
    else{
        $address = test_input($_POST["address"]);
    }

    if(empty($_POST["mphone"]))
        $mphoneErr = " - Name is Required";
    else{
        $mphone = test_input($_POST["mphone"]);
        if (!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/",$mphone))
            $mphoneErr = " - Please enter a valid Australian phone number";

    }

    if(empty($_POST["card"]))
        $cardErr = " - Card is Required";
    else
        $card = test_input($_POST["card"]);

    if(empty($_POST["expiary"]))
        $expiaryErr = "";
    else
        $expiary = test_input($_POST["expiary"]);

    if($nameErr == "" && $emailErr == "" && $addressErr == "" && $mphoneErr == "" && $cardErr == "" && $expiaryErr == ""){
        echo $_POST['name'];
        header("Location: receipt.php");
    }
}


?>



<form id="usrform" method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>">
    <label class="formheadings" for="name">Name</label>
    <span class="error">
        <?php echo $nameErr;?></span>
    <input type="text" id="name" name="name" value="<?php echo $name ?>">

    <label class="formheadings" for="email">Email</label>
    <span class="error">
        <?php echo $emailErr;?></span>
    <input type="email" id="email" name="email" value="<?php echo $email ?>">

    <label class="formheadings" for="address">Address</label>
    <span class="error">
        <?php echo $addressErr;?></span><br>
    <textarea id="address" name="address"><?php echo $address?></textarea><br>

    <label class="formheadings" for="mphone">Mobile Phone</label>
    <span class="error">
        <?php echo $mphoneErr;?></span>
    <input type="text" id="mphone" name="mphone" value="<?php echo $mphone ?>">

    <label class="formheadings" for="card">Credit Card</label>
    <span class="error">
        <?php echo $cardErr;?></span>
    <img id="visapic" src='../../media/PTB/visa.png' alt='Visa Logo' />
    <input type="text" onchange="checkVisa()" id="card" name="card">

    <label class="formheadings" for="expiary">Expiary Date</label>
    <span class="error"><?php echo $expiaryErr;?></span><br>
<!--
    <select name="months">
        <option value="jan">January</option>
        <option value="feb">February</option>
        <option value="mar">March</option>
        <option value="arp">April</option>
        <option value="may">May</option>
        <option value="jun">June</option>
        <option value="jul">July</option>
        <option value="aug">August</option>
        <option value="sep">September</option>
        <option value="oct">October</option>
        <option value="nov">November</option>
        <option value="dec">December</option>
    </select>
    <select name="years">
        <option value="jan">2018</option>
        <option value="feb">2019</option>
        <option value="mar">2020</option>
        <option value="arp">2021</option>
        <option value="may">2022</option>
        <option value="jun">2023</option>
        <option value="jul">2024</option>
        <option value="aug">2025</option>
        <option value="sep">2026</option>
        <option value="oct">2027</option>
        <option value="nov">2028</option>
        <option value="dec">2029</option>
    </select>
-->

    <br><br>
    <input id="submit" type="submit" value="Submit">
</form>



<!--
<form id="information" onsubmit="formSubmit()" action="receipt.php" method="post">
  <fieldset>
    <legend>Passenger information:</legend>
    Name:<br>
    <input type="text" name="firstname" value="">
    <br><br>
    Email:<br>
    <input type="email" name="email" value="">
    <br><br>
    Address:<br>
    <input type="textarea" name="address" value="">
    <br><br>
    Mobile Phone:<br>
    <input type="text" name="phone" value="">
    <br><br>
    Credit Card:<br>
    <input type="text" name="creditcard" value="">
    <br><br>
    Expiary Date:<br>
    <input type="date" name="expiary" value="">
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
-->

<?php end_module(); ?>
