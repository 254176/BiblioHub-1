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
					<th>Transaction ID</th>
					<th>User ID</th>
					<th>Inventory ID</th>
					<th>Transaction Type</th>
					<th>Transaction Date</th>
					<th>Due Date</th>
					<th>Status</th>
				</tr>
			</thead>

			<tbody>
				<?php
				// Fetch book log data from the database and populate the table
				$statement = 'select * from Transactions';
				$result = $db->query($statement);
				while ($row = $result->fetch())
				{
					echo("<tr>");
					echo("<td>" . $row['TransactionID'] . "</td>");
					echo("<td>" . $row['UserID'] . "</td>");
					echo("<td>" . $row['InventoryID'] . "</td>");
					echo("<td>" . $row['TransactionType'] . "</td>");
					echo("<td>" . $row['TransactionDate'] . "</td>");
					echo("<td>" . $row['DueDate'] . "</td>");
					echo("<td>" . $row['State'] . "</td>");
					echo("</tr>");
				}
				?>
			</tbody>
		</table>
	</body>
</html>
