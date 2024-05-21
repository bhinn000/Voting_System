<!DOCTYPE html>
<html>

<head>
	<title>Log in to Vote</title>
	<link rel="stylesheet" href="login_vote.css">
</head>

<body>
	<h1>Log in to Vote</h1>
	<p style="color:black ; font-size: 1.5em ; ">Please note that once you have logged in , regardless of whether or not you submit it, you will not be able to log in again. </p>
	<form method="post">
		<label for="voter_id">Voter ID:</label>
		<input type="text" id="voter_id" name="voter_id" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>

		<input type="submit" name="submit" value="submit">

	</form>

	<form method="post">
		<label>Don't have a Voter ID?</label>
		<input type="submit" name="create_voter_id" value="Create new Voter ID">
	</form>

</body>

</html>




<!-- connecting with database -->
<?php

// after submit2
if (isset($_POST['create_voter_id'])) {
	header("Location: login_makeVID_copy.php");
}

// after submitting
if (isset($_POST['submit'])) {

	$conn = mysqli_connect('127.0.0.1:3307', 'root', '', '_Voting', 7882);
	if (!$conn) {
		echo "Problem in connecting with your database";
	}

	$voter_id = $_POST['voter_id'];

	// check if its not in voter_list or not in correct format
	if (!is_voterID()) {
		echo "<h1>Either the format is not correct or you don't have voter_id</h1>";

		if (isset($_POST['create_voter_id'])) {
			//  if it is not in voted_done_acc()
			if (!is_voted_done()) {
				header("Location : login_makeVID.php");
			}
		}
	} else {
		// if you have already logged in
		if (is_voted_done()) {

			global $query5, $conn;
			while ($row = mysqli_fetch_assoc($query5)) {

				if ($_POST['password'] === $row["password"]) {
					header("Location: cheat_vote.php");
				} else if (($_POST['password'] !== $row["password"])) {
					header("Location: cheatpsw_vote.php");
				}
			}
		}
		// if you have not logged in yet
		else {
			//there can be cases either the password is correct and wrong

			is_still_voter();
		}
	}



	mysqli_close($conn);
}
?>


<!-- function -->
<?php

// to check whether voter_id is in correct format or is voter or not
function is_voterID()
{
	global $voter_id, $conn, $query5;
	$sql_is_voterID = "SELECT * FROM `voters` WHERE Voter_ID='$voter_id'";
	$query5 = mysqli_query($conn, $sql_is_voterID);
	if (!$query5) {
		echo "Problem with making query";
	}
	if (mysqli_num_rows($query5) > 0) {
		return 1;
	}
}

// to check if in voted_done_acc
function is_voted_done()
{
	global $done_Voter_ID, $voter_id, $conn;
	$sql_is_voted_done = "SELECT * FROM `voted_done_acc` WHERE Voter_ID = '$voter_id'";
	$query4 = mysqli_query($conn, $sql_is_voted_done);
	if (!$query4) {
		echo "Problem with making query";
	}
	if (mysqli_num_rows($query4) > 0) {
		return 1;
	}
}

// check there is voterID is eligible 
function is_still_voter()
{
	global $query5, $conn;
	while ($row = mysqli_fetch_assoc($query5)) {

		$password = $_POST['password'];
		// if yes show ballot paper and insert the record to voted_done_acc
		// if password
		if ($password === $row["password"]) {
			// echo "Voter_ID: " .$row["Voter_ID"]. "<br>";
			// echo "Password: " . $row["password"]. "<br>";
			echo "Show ballot paper and included in voted_done_acc";

			$done_Voter_ID = $row["Voter_ID"];
			$done_password = $row["password"];

			//insert into voted_done_acc
			$sql_insert = "INSERT INTO `voted_done_acc`( `Voter_ID` ) VALUES ('$done_Voter_ID')";
			$query_insert = mysqli_query($conn, $sql_insert);

			// show ballot paper
			header("Location: ballot_chn.php");
		}

		// if not password
		else {
			echo "<h2 style='color:black; font-size:3em;'>Wrong password</h2>";
		}
	}
}



?>