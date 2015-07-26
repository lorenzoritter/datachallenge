<?php
	$input = $_GET["numAirports"];
	exec('python /home/lorenzo/Documents/AmadeusDataChallenge/Code/topAirports.py '.$input, $result);
	$resultData = json_decode($result[0], true);
	
	echo "<html><center><h3>Top ".$input." Airports</h3>";
	echo "<table border='1'>";
	echo "<th>Code</th><th>Arrivals</th><th>Name</th><th>City</th>";
	foreach ($resultData as $index=>$airport){
		echo '<tr><td>';
		print $index;
		echo '</td><td>';
		print $airport[Arrivals];
		echo '</td><td>';
		print $airport[Name];
		echo '</td><td>';
		print $airport[City];
		echo '</td></tr>';
	}
	echo '</table></html>';	
?>
