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

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Book Log</title>
	</head>


	<body>
		<h1>Book Log</h1>

		<!-- Display book log -->

		<table>
			<thead>
				<tr>
					<th>Title</th>
					<th>ISBN</th>
					<th>Full name</th>
					<th>User ID</th>
					<th>Date</th>
					<th>Due Date</th>
					<th>Type</th>
					<th>Status</th>
				</tr>
			</thead>

			<tbody>
				<?php
				// Fetch book log data from the database and populate the table
				$statement = <<<END
								SELECT u.Name, u.UserID, b.Title, b.ISBN, t.TransactionType, t.TransactionDate, t.DueDate, t.State
								FROM Books as b, Inventory as i, Transactions as t, Users as u
								WHERE b.ISBN = i.ISBN AND t.InventoryID = i.InventoryID
								AND u.UserID = t.UserID
								END;
								// >>>

				$transaction_types = ["Checked-out", "Returned", "Added", "Removed"];
				$result = $db->query($statement);
				while ($row = $result->fetch())
				{
				echo("<tr>");
				echo("<td>" . $row['Title'] . "</td>");
				echo("<td>" . $row['ISBN'] . "</td>");
				echo("<td>" . $row['Name'] . "</td>");
				echo("<td>" . $row['UserID'] . "</td>");
				echo("<td>" . $row['TransactionDate'] . "</td>");
				echo("<td>" . $row['DueDate'] . "</td>");
				echo("<td>" . $transaction_types[$row['TransactionType']] . "</td>");
				echo("<td>" . ($row['State'] ? "✓" : "⦵") . "</td>");
				echo("</tr>");
				}
				?>
			</tbody>
		</table>
	</body>
</html>
