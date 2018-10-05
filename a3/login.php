<?php
session_start();
$page_title = 'index';
include_once('tools.php');
top_module();
?>

<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
    <div class="imgcontainer">
        <img src="../../media/PTB/login%20avatar.jpg" alt="Jono Diver holding the balloon from flying away" class="avatar">
        <!-- Taken during my first shift with PTB -->
    </div>

    <div class="formcontainer">
        <label for="email"><b>Username</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button id="submit" type="submit">Login</button>
    </div>

</form>

<?php end_module(); ?>
