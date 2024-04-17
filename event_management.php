<?php
$title = "Event Management";
include("template/header.php");
?>

<!-- Form for adding an event -->
<h2>Add Event</h2>
<form action="add_event.php" method="post">
    <!-- Input fields for event details -->
    <label for="eventID">eventID:</label>
    <input type="text" id="eventID" name="eventID" required>
    <br>
    <label for="userID">userID:</label>
    <input type="text" id="userID" name="userID" required>
    <br>
    <label for="eventDate">Event Date:</label>
    <input type="date" id="eventDate" name="eventDate" required>
    <br>
    <label for="eventTitle">Event Title:</label>
    <input type="text" id="eventTitle" name="eventTitle" required>
    <br>
    <label for="eventDescription">Event Description:</label>
    <input type="text" id="eventDescription" name="eventDescription" required>
    <br>
    <button type="submit">Add Event</button>
</form>

<!-- Form for updating an event -->
<h2>Update Event</h2>
<form action="update_event.php" method="post">
    <!-- Input fields for event details -->
    <label for="eventIdToUpdate">Event ID to Update:</label>
    <input type="text" id="eventIdToUpdate" name="eventIdToUpdate" required>
    <br>
    <label for="newEventDate">New Event Date:</label>
    <input type="date" id="newEventDate" name="newEventDate" required>
    <br>
    <label for="newEventTitle">New Event Title:</label>
    <input type="text" id="newEventTitle" name="newEventTitle" required>
    <br>
    <label for="newEventDescription">New Event Description:</label>
    <input type="text" id="newEventDescription" name="newEventDescription" required>
    <br>
    <button type="submit">Update Event</button>
</form>

<!-- Form for deleting an event -->
<h2>Delete Event</h2>
<form action="delete_event.php" method="post">
    <label for="eventIdToDelete">Event ID to Delete:</label>
    <input type="text" id="eventIdToDelete" name="eventIdToDelete" required>
    <br>
    <button type="submit">Delete Event</button>
</form>
