<?php
	session_set_cookie_params(3600);
	session_start();

	session_unset();

	setcookie('token', '', time() - 3600, '/');

	header("Location: index.php");
	exit();
?>