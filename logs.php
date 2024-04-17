<?php
$title = "Logs";
include("lib/header.php");
ensure_admin();

require_once('lib/db.php');
?>

<!-- Books log -->

<section>
	<h2>Book Log</h2>

	<table border="1">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Genre</th>
		</tr>

		<?php
		// Select data from Books table
		$sql = "SELECT * FROM Books";
		$result = $conn->query($sql);

		// Output data of each row
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["ISBN"] . "</td>";
				echo "<td>" . $row["Title"] . "</td>";
				echo "<td>" . $row["Author"] . "</td>";
				echo "<td>" . $row["Genre"] . "</td>";
				echo "</tr>";
			}
		}
		?>
	</table>
	<span><?php echo $result->num_rows ?> results</span>
</section>


<section>
	<h2>Inventory Log</h2>

	<table border="1">
		<tr>
			<th>InventoryID</th>
			<th>ISBN</th>
			<th>TransactionID</th>
		</tr>

		<?php
		// Select data from Inventory table
		$sql = "SELECT * FROM Inventory";
		$result = $conn->query($sql);

		// Output data of each row
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["InventoryID"] . "</td>";
				echo "<td>" . $row["ISBN"] . "</td>";
				echo "<td>" . $row["TransactionID"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='3'>0 results</td></tr>";
		}
		?>
	</table>
	<span><?php echo $result->num_rows ?> results</span>
</section>


<section>
	<h2>Transaction Log</h2>
	<table border="1">
		<tr>
			<th>TransactionID</th>
			<th>UserID</th>
			<th>InventoryID</th>
			<th>TransactionType</th>
			<th>TransactionDate</th>
			<th>DueDate</th>
			<th>Status</th>
		</tr>
		<?php
		// Select data from Transactions table
		$sql = "SELECT * FROM Transactions";
		$result = $conn->query($sql);

		// Output data of each row
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["TransactionID"] . "</td>";
				echo "<td>" . $row["UserID"] . "</td>";
				echo "<td>" . $row["InventoryID"] . "</td>";
				echo "<td>" . $row["TransactionType"] . "</td>";
				echo "<td>" . $row["TransactionDate"] . "</td>";
				echo "<td>" . $row["DueDate"] . "</td>";
				echo "<td>" . $row["Status"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='7'>0 results</td></tr>";
		}
		?>
	</table>
	<span><?php echo $result->num_rows ?> results</span>
</section>

<section>
	<h2>User Log</h2>
	<table border="1">
		<tr>
			<th>User ID</th>
			<th>Role</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Password</th>
		</tr>
		<?php
		// Select data from Users table
		$sql = "SELECT * FROM Users";
		$result = $conn->query($sql);

		// Output data of each row
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["UserID"] . "</td>";
				echo "<td>" . $row["Role"] . "</td>";
				echo "<td>" . $row["Name"] . "</td>";
				echo "<td>" . $row["Email"] . "</td>";
				echo "<td>" . $row["Address"] . "</td>";
				echo "<td>" . $row["Password"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='6'>0 results</td></tr>";
		}
		?>
	</table>
</section>

<?php
$conn->close();
include("lib/footer.php");
?>
