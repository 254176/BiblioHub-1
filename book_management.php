<?php
$title = "Book Management";
include("template/header.php");
?>

<!-- Form for adding a book -->

<h2>Add Book</h2>

<form action="add_book.php" method="post">
	<label for="title">Title:</label>
	<input type="text" id="title" name="title" required>

	<label for="author">Author:</label>
	<input type="text" id="author" name="author" required>

	<label for="genre">Genre:</label>
	<input type="text" id="genre" name="genre" required>

	<label for="isbn">ISBN:</label>
	<input type="text" id="isbn" name="isbn" required>

	<button type="submit">Add Book</button>
</form>


<!-- Form for updating a book -->

<h2>Update Book</h2>

<form action="update_book.php" method="post">
	<label for="isbnToUpdate">ISBN to Update:</label>
	<input type="text" id="isbnToUpdate" name="isbnToUpdate" required>

	<!-- Input fields for new book details -->
	<button type="submit">Update Book</button>
</form>


<!-- Form for deleting a book -->

<h2>Delete Book</h2>
<form action="delete_book.php" method="post">
	<label for="isbnToDelete">ISBN to Delete:</label>
	<input type="text" id="isbnToDelete" name="isbnToDelete" required>

	<button type="submit">Delete Book</button>
</form>
