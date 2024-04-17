<?php
$title = "User Login";
include("lib/header.php");
require_once("lib/auth.php");

# If user is already logged-in, redirect.
if (isset($_SESSION['user']))
	header("Location: dashboard.php");
?>

<form action="login.php" method="post">
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>

	<label for="password">Password:</label>
	<input type="password" id="password" name="password" required>

	<input type="submit" value="Login">
</form>
