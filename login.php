<?php
require_once('lib/auth.php');

// Get username and password from form submission
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['username']) && isset($_POST['password']) && !isset($_SESSION['user'])) {
	require_once('lib/db.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	// Query to check if the username and password match a user in the database
	$sql = "SELECT * FROM Users WHERE Name='$username' AND Password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// User found, redirect to dashboard or home page
		$user_row = $result->fetch_assoc();
		$_SESSION['user'] = $user_row['UserID'];
		$_SESSION['name'] = $user_row['Name'];
		$_SESSION['role'] = $user_row['Role'];
		header("Location: dashboard.php");
	} else {
		// Check if the username exists
		$sql = "SELECT * FROM Users WHERE Name='$username'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// Username found, but password is incorrect
			echo "Incorrect password.";
		} else {
			// Username not found
			echo "Username not found.";
		}
	}
} else {
	header("Location: dashboard.php");
}

// Close connection
$conn->close();
?>
