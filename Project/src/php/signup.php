<?php
	$servername = "localhost";
	$server_username = "root";
	// $password = "Bmm2011*";
	$server_password = "";
	$dbname = "CS_372_COURSE_PROJECT";

	if (empty($_POST["username"]) ||
		empty($_POST["password1"]) ||
		empty($_POST["password2"])) {
			echo ('<div style="color: red">Fields cannot be empty!</div>');
	} elseif ($_POST['password1'] != $_POST['password2']) {
		echo ('<div style="color: red">Passwords are not identical!</div>');
	} else {
		$connection = new mysqli($servername, $server_username, $server_password, $dbname);

		if ($connection->connect_error) {
			die('Connect Error (' . $connection->connect_errno . ') '. $connection->connect_error);
		}

		$sql = sprintf("SELECT 1 FROM users_t WHERE Username = '%s'", $connection->real_escape_string($_POST["username"]));

		// execute query
		$result = $connection->query($sql) or die($connection->error);

		// check whether we found a row
		if ($result->num_rows == 1)
		{
		    echo ('<div style="color: red">Username is already used!</div>');
		}
		else
		{
			$sql = sprintf("INSERT INTO `users_t` (`Username`, `Password`) VALUES ('%s', password('%s'))", $connection->real_escape_string($_POST["username"]), $connection->real_escape_string($_POST["password1"]));

			// execute query
			$result = $connection->query($sql) or die(mysqli_error($connection));

			if ($result === false)
				die("Could not query database");
			else
				echo "User was inserted into DB!\n";
				header("location: ../webpage.php"); // Redirecting To Other Page
		}
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Signup</title>
		<link href="../css/signup_page.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main" style="text-align:center">
			<h2>Login Form</h2>
			<div id="signup">
				<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					<br>
					Name: <input name="username" type="text"><br>
					Password: <input name="password1" type="password"> <br>
					Password (again): <input name="password2" type="password"> <br><br>
					<input type="submit" name="signup" value="Sign Up">
				</form>
			</div>
		</div>
	</body>
</html>