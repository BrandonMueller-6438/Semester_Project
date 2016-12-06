<?php
	include('login.php'); // Includes Login Script

	// if(isset($_SESSION['login_user'])){
	// 	header("location: profile.php");
	// }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href="../css/login_page.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main" style="text-align:center">
			<h2>Login Form</h2>
			<div id="login">
				<form action="" method="post">
					<label>Username :</label>
					<input id="name" name="username" placeholder="username" type="text"> <br>
					<label>Password :</label>
					<input id="password" name="password" placeholder="**********" type="password"> <br><br>
					<input name="submit" type="submit" value=" Login "> <br><br>
					<input type="reset">
					<span><?php echo $error; ?></span>
				</form>
			</div>
		</div>
	</body>
</html>