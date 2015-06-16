<?php
	include'common.php';
	$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');
	
	$event_name = $_POST['event_name'];
	$event_descrip = $_POST['event_textarea'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$address = $_POST['address'];
	$cost = $_POST['cost'];
	
	$query = "INSERT INTO event_main 
	(event_name, description, beg_date_time, end_date_time, event_address_line3, event_cost)
	VALUES ('$event_name', '$event_descrip', '$start_time', '$end_time', '$address', $cost);";
	prcSQL($mysqli, $query);
	$last_id = $mysqli->insert_id;
	
	if(isset($_POST['type'])) {
		$query = "INSERT INTO type_lookup VALUES ";
		$event_type = $_POST['type'];
		foreach($event_type as $item) {
			$query .= "($last_id, $item),";
		}
		$query = substr($query, 0, -1);
		$query .= ";";
		echo $query . "</br>";
		prcSQL($mysqli, $query);
	}
	
	if(isset($_POST['topic'])) {
		$query = "INSERT INTO topic_lookup VALUES ";
		$event_topic = $_POST['topic'];
		foreach($event_topic as $item) {
			$query .= "($last_id, $item),";
		}
		$query = substr($query, 0, -1);
		$query .= ";";
		echo $query . "</br>";
		prcSQL($mysqli, $query);
	}
	
	$mysqli->close();
?>