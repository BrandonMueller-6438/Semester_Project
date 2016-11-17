<?php
	$servername = "localhost";
	$username = "root";
	// $password = "Bmm2011*";
	$password = "";
	$dbname = "CS_372_COURSE_PROJECT";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	}

	echo "<link rel='stylesheet' type='text/css' href='../css/itable.css'>";
	echo "<body>";
	echo "<table width='100%' border='5' cellpadding='0' align='left'>";
	$sql = "SELECT * FROM Candidates_T";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<th>". $row["Candidate1"] ."</th>";
			echo "<th>". $row["Candidate2"] ."</th>";
			echo "<th>". $row["Candidate3"] ."</th>";
			echo "</tr>";
			//echo "<br> id: ". $row["CandidatesID"]. " - C1: ". $row["Candidate1"]. " C2: " . $row["Candidate2"] . " -C3: " . $row["Candidate3"] . "<br>";
		 }
	} else {
		 echo "0 results";
	}
	
	$sql = "SELECT * FROM STATS_T";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>". $row["Can1Poll"] ."</td>";
			echo "<td>". $row["Can2Poll"] ."</td>";
			echo "<td>". $row["Can3Poll"] ."</td>";
			echo "<td>". $row["DateOfRecord"] ."</td>";
			echo "</tr>";
		}
	} else {
		echo "No Data";
	}
	echo "</table></body>";

	$conn->close();
?> 