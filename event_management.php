<?php
$title = "Event Management";
include("template/header.php");
?>

<!-- Form for adding an event -->

<h2>Add Event</h2>

<form action="add_event.php" method="post">
	<!-- Input fields for event details -->
	<button type="submit">Add Event</button>
</form>


<!-- Form for updating an event -->

<h2>Update Event</h2>

<form action="update_event.php" method="post">
	<!-- Input fields for event details -->
	<button type="submit">Update Event</button>
</form>


<!-- Form for canceling an event -->

<h2>Cancel Event</h2>

<form action="cancel_event.php" method="post">
	<label for="eventIdToCancel">Event ID to Cancel:</label>
	<input type="text" id="eventIdToCancel" name="eventIdToCancel" required>

	<button type="submit">Cancel Event</button>
</form>
