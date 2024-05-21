<!DOCTYPE html>
<html>

<head>
	<title>My Page</title>
	<style>
		body {
			background-color: #3071a9;
			color: white;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1,
		h2,
		h3 {
			margin: 10px 0;
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		.container {
			margin: 0 auto;
			max-width: 800px;
			padding: 20px;
		}

		.Mayor,
		.Sub_mayor,
		.President,
		.Vice_president {
			background-color: rgb(139, 139, 202);
			padding: 30px;
			width: 80%;
			margin: auto;
			border-radius: 10px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
		}

		.Mayor p,
		.Sub_mayor p,
		.President p,
		.Vice_president p {
			font-size: 20px;
			line-height: 1.5;
			text-align: center;
			margin: 0;
		}

		/* New CSS code */
		a {
			color: white;
			text-decoration: none;
			font-weight: bold;
			transition: all 0.2s ease-in-out;
		}

		a:hover {
			color: #e6e6e6;
			transform: scale(1.1);
		}

		button {
			background-color: #e6e6e6;
			color: #3071a9;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
		}

		button:hover {
			background-color: #3071a9;
			color: white;
			transform: scale(1.1);
		}
	</style>
</head>

<body>

</body>

</html>


<?php
global $row, $position_name;

$conn = mysqli_connect('127.0.0.1:3307', 'root', '', '_Voting', 7882);
if (!$conn) {
	echo "Problem in connecting with your database";
}

display_winner("Mayor", "Address",  "Mayor_id", "Mayor_name",  "Party", "mayor_vote_received", "`mayor_details`");

display_winner("Sub_mayor", "Address",  "Sub_mayor_id", "Sub_mayor_name",  "Party", "Sub_mayor_vote_received", "`Sub_mayor_details`");

display_winner("President", "Address",  "President_id", "President_name",  "Party", "President_vote_received", "`President_details`");

display_winner("Vice_president", "Address",  "Vice_president_id", "Vice_president_name",  "Party", "Vice_President_vote_received", "`Vice_President_details`");

?>

<?php
function display_winner($position, $position_address, $position_id,  $position_name,  $party, $position_db_vote,  $db_position)
{
	global $conn;
	$sql = "SELECT * from $position_db_vote";
	$query = mysqli_query($conn, $sql);
	if (!$query) {
		echo "Problem with making query";
	}

	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {

			$vote_apple = $row["Apple"];
			$vote_motorola = $row["Motorola"];
			$vote_samsung = $row["Samsung"];
			$vote_mi = $row["Mi"];
			$vote_nokia = $row["Nokia"];
			$max_vote = max($vote_apple, $vote_motorola, $vote_samsung, $vote_mi, $vote_nokia);

			if ($max_vote == $vote_apple) {
				$winner = "Apple";
			} elseif ($max_vote == $vote_motorola) {
				$winner = "Motorola";
			} elseif ($max_vote == $vote_samsung) {
				$winner = "Samsung";
			} elseif ($max_vote == $vote_mi) {
				$winner = "Mi";
			} elseif ($max_vote == $vote_nokia) {
				$winner = "Nokia";
			} else {
				$winner = "No winner";
			}

			$sql_winner = "select * from $db_position where party='$winner' ";
			$query_winner = mysqli_query($conn, $sql_winner);
			if (!$query_winner) {
				echo "Problem with making query";
			}
			if (mysqli_num_rows($query_winner) > 0) {

				while ($row = mysqli_fetch_assoc($query_winner)) {
					$post = $row[$position_id];
					$winner = $row[$position_name];
					$place = $row[$position_address];
					$party = $row[$party];
					$vote = $max_vote;
				}
			}
		}
	}
	$html = <<<HTML
					<h2>$position Election</h2>
					<div class="$position">
						<p>Your new $position is: $winner ($post) from $place who is candidate of $party  party . One got $max_vote vote.</p>
					</div>					
					HTML;
	echo $html;
}


?>