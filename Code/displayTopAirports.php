<?php
	$input = $_POST["numAirports"];
	//$result = shell_exec('python /home/lorenzo/Documents/AmadeusDataChallenge/Code/topAirports.py');
	#print_r(getenv());
	#$path = sys.path;
	#print $path;
	#putenv('PYTHONPATH=x');
	#print getenv();
	exec('python /home/lorenzo/Documents/AmadeusDataChallenge/Code/topAirports.py '.$input, $result);
	#echo $result[5];
	#echo 'hi 10';
	//echo $values;
	#$resultData = json_decode($result);
	echo 'result: ';
	var_dump($result);
	echo '<br>resultData: ';
	$resultData = json_decode($result[0], true);
	#print_r(var_dump($resultData));
	echo '<pre>'.print_r($resultData).'</pre>';
	echo '<br>resultData[0]: ';
	print_r($resultData[LHR][Arrivals]);
	
	echo "<table>";
	echo "<th>Index</th><th>Arrivals</th><th>Name</th><th>City</th>";
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
	echo '</table>';

/*
	echo '<table><tr><td>';
	print $resultData[LHR][Arrivals];
	echo '</td></tr><tr><td>';
	echo '2323';
	echo '</td></tr></table>';
*/
/*
    #if (count($resultData->Arrivals)) {
        // Open the table
        echo "<table>";

        // Cycle through the array
        foreach ($resultData as $airport) {

            // Output a row
            echo "<tr>";
            echo "<td>$airport</td>";
            #echo "<td>$stand->JFK</td>";
            echo "</tr>";
    #    }

        // Close the table
        echo "</table>";*/	
?>
