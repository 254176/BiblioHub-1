<?php
$title = "User Management";
include("template/header.php");
?>

<!-- Form for adding a user -->

<h2>Add User</h2>

<form action="add_user.php" method="post">
	<!-- Input fields for user details -->
	<button type="submit">Add User</button>
</form>


<!-- Form for updating a user -->

<h2>Update User</h2>

<form action="update_user.php" method="post">
	<!-- Input fields for user details -->
	<button type="submit">Update User</button>
</form>


<!-- Form for deleting a user -->

<h2>Delete User</h2>
<form action="delete_user.php" method="post">
	<label for="userIdToDelete">User ID to Delete:</label>
	<input type="text" id="userIdToDelete" name="userIdToDelete" required>

	<button type="submit">Delete User</button>
</form>
