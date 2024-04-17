<?php
session_start();
if (!$_SESSION['name'])
	$_SESSION['name'] = 'Guest';

if (!$_SESSION['role'])
	$_SESSION['role'] = 'Guest';
?>
