<?php
	require "db.php";
	require "session.php";

	unset($_SESSION['logged_user']);

	header('Location: ../main.php');
?>
