<?php
	require "db.php";
?>


<?php 
if( isset($_SESSION['logged_user']) ) : ?>
	Already logged in! <br>
	Sup, <?php echo $_SESSION['logged_user']->login; ?>!
	<hr>
	<a href="./logout.php">Log out</a>
<?php else : ?>
	You're logged out!
<a href="./login.php">login</a><br>
<a href="./signup.php">reg</a><br>
<?php endif; ?>