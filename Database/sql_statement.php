<?php

include 'common.php';

$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

$query = $_POST['query'];

// run the query
$result = $mysqli->query($query);

// check for errors
if($mysqli->errno) {
	die('Query error (' . $mysqli->errno . ') ' . $mysqli->error);
}

// close the connection, we're done 
$mysqli->close();

// setup a function to print a row
function print_row($row) {
	echo '<tr>';
	foreach($row as $key=>$value) {
		echo '<td>' . $value . '</td>';
	}
	echo '</tr>' . "\n";
}
?>
<!doctype html>
<html>
	<head>
		<title>SQL Statement Processor</title>
		<meta charset='uft-8'>
	</head>
	<body>
		<h1>SQL Statement Processor</h1>
		<form method='post'>
			<p>Input query:<br/>
			<textarea rows=10 cols=50 name='query' placeholder='Enter your query here'><?= $_POST['query'] ?></textarea></p>
			<input type='submit'>
		</form>
<?php
	if(is_object($result)) {
?>
		<table border=1>
<?php
	// fetch the first row
	$row = $result->fetch_assoc();
	// print the keys as <th>
	echo '<tr>';
	foreach($row as $key=>$value) {
		echo '<th>' . $key . '</th>';
	}
	echo '</tr>' . "\n";
	// print the first row
	print_row($row);
	// fetch the rest of the rows
	while($row = $result->fetch_assoc()) {
		// print a row
		print_row($row);
	}
?>
		</table>
<?php
	} else {
		if($result) {
			echo '<p>Tada! Query success!!!!</p>';
		} else {
			echo '<p>Wahh-wahh, :-(  It didn\'t work</p>';
		}
	}
?>
	</body>
</html>
