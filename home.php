<!DOCTYPE html>
<html>

<head>
	<title>Log in to Vote</title>
	<link rel="stylesheet" href="login_vote.css">
</head>

<body>
	<h1>Log in to Vote</h1>
	<form method="post">
		<label for="voter_id">Voter ID:</label>
		<input type="text" id="voter_id" name="voter_id" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>

		<input type="submit" name="submit" value="submit">

	</form>

	<?php
	if (isset($_POST['submit'])) {
		// code to check if the voter ID and password are valid
		// ...
		// if the voter ID and password are not valid, show an error message
		// ...
		// if the voter ID and password are valid, redirect the user to the voting page
		// ...
	}
	?>

	<br>
	<form method="post">
		<label>Don't have a Voter ID?</label>
		<input type="submit" name="create_voter_id" value="Create new Voter ID">
	</form>

	<?php
	if (isset($_POST['create_voter_id'])) {
		// code to create a new Voter ID
		// ...
		// show a message confirming that the Voter ID has been created
		// ...
	}
	?>

</body>

</html>