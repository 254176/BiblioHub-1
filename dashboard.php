<?php
$title = "Dashboard";
include("lib/header.php");
?>

<h3>Book Transaction</h3>
<form action="transaction.php" method="post">
	<label for="isbn">ISBN:</label>
	<input type="text" id="isbn" name="isbn" required><br>
	<label for="inventoryID">inventoryID:</label>
	<input type="text" id="inventoryID" name="inventoryID" required><br>
	<label for="transactionID">transactionID:</label>
	<input type="text" id="transactionID" name="transactionID" required><br>
	<label for="userID">userID:</label>
	<input type="text" id="userID" name="userID" required><br>
	<label for="transactionType">Transaction Type:</label>
	<select id="transactionType" name="transactionType" required>
		<option value="1">Borrow</option>

		<option value="2">Return</option>
	</select><br>

	<button type="submit">Submit Transaction</button>
</form>

<?php
include("lib/footer.php");
?>
