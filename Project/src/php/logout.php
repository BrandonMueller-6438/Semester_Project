<?php
	// enable sessions
	session_start();
	
	session_unset();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: ../webpage.php"); // Redirecting To Home Page
	}
?>