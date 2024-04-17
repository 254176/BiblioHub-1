<?php
require_once('config.php');
try {
	$db = new PDO(DBCONNSTRING,DBUSER,DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	die( $e->getMessage() );
}
?>

<?php
$title = "Book Catalog";
include("template/header.php");

function render_book($row) {
	echo("<tr>");
	echo("<td>" . $row['Title'] . "</td>");
	echo("<td>" . $row['Author'] . "</td>");
	echo("<td>" . $row['ISBN'] . "</td>");
	echo("<td>" . $row['Genre'] . "</td>");
	echo("<td>" . ($row['Status'] ? "✓" : "⦵") . "</td>");
	echo("</tr>");
}
?>

<form action="book_catalog.php" method="GET">
	<select name="type" id="type">
		<option value="title" selected>Title</option>
		<option value="author">Author</option>
		<option value="isbn">ISBN</option>
	</select>

	<input type="text" id="q" name="q" required>
	<button type="submit">Search</button>
</form>


<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>ISBN</th>
			<th>Genres</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$statement = <<<END
		SELECT b.Title, b.Author, b.ISBN, b.Genre, t.Status
		FROM Books as b, Inventory as i, Transactions as t
		WHERE b.ISBN = i.ISBN AND i.InventoryID = t.InventoryID
		END;

		$result = $db->query($statement);
		while ($row = $result->fetch())
		{
			render_book($row);
		}
		?>
	</tbody>
</table>

