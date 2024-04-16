<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Event Log</title>
	</head>

	<body>
		<h1>Event Log</h1>

		<!-- Display event log -->

		<table>
			<thead>
				<tr>
					<th>Event ID</th>
					<th>User ID</th>
					<th>Event Date</th>
					<th>Event Title</th>
					<th>Event Description</th>
				</tr>
			</thead>

			<tbody>
				<?php
				// Fetch event log data from the database and populate the table
				// Example:
				// foreach ($eventLogData as $event) {
				//     echo "<tr>";
				//     echo "<td>{$event['event_id']}</td>";
				//     echo "<td>{$event['user_id']}</td>";
				//     echo "<td>{$event['event_date']}</td>";
				//     echo "<td>{$event['event_title']}</td>";
				//     echo "<td>{$event['event_description']}</td>";
				//     echo "</tr>";
				// }
				?>
			</tbody>
		</table>
	</body>
</html>
