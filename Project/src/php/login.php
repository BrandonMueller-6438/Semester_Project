<?php
	$servername = "localhost";
	$server_username = "root";
	// $password = "Bmm2011*";
	$server_password = "";
	$dbname = "CS_372_COURSE_PROJECT";

	// enable sessions
	session_start();
	$error = '';

	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		} else {
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = new mysqli($servername, $server_username, $server_password, $dbname);
			// Define $username and $password
			$username = $connection->real_escape_string($_POST["username"]);
			$password = $connection->real_escape_string($_POST["password"]);
			// SQL query to fetch information of registerd users and finds user match.
			$sql = sprintf("SELECT * FROM users_t WHERE Username='%s' AND Password=password('%s')", $username, $password);
			$result = $connection->query($sql) or die(mysqli_error($connection));
			if ($result === false) {
				$error = "Username or Password is invalid";
			} else {
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: ../webpage.php"); // Redirecting To Other Page
			}
		}
	}
?>
