<?php
session_start();

if (!isset($_SESSION['name']))
	$_SESSION['name'] = 'Guest';

if (!isset($_SESSION['role']))
	$_SESSION['role'] = 'guest';


function ensure_admin() {
	if ($_SESSION['role'] == 'admin')
		return true;
	else {
		echo('<h3>Sorry! This page is restricted to administrators.</h3>');
		if (!isset($_SESSION['user']))
			echo('<h4>Try <a href="user_login.php">logging in</a>.</h4>');
		exit;
	}
}
?>
