<?php
$title = "Event Log";
include("template/header.php");
?>

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
