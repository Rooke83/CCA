<?php
include'/home/jingujin/public_html/ITGuys/common.php';

$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

$query = "SELECT event_main.event_id AS id, 
event_main.event_name AS title, 
event_main.description AS descrip, 
organization.org_name AS org, 
event_main.beg_date_time, 
event_main.end_date_time, 
event_main.event_cost, 
event_type.type_name AS type, 
event_topic.topic_name AS topic, 
event_main.event_loc_lat AS lat, 
event_main.event_loc_lng AS lng, 
event_main.event_address_line1 AS addr1, 
event_main.event_address_line2 AS addr2, 
event_main.event_address_line3 AS addr3 
FROM event_main
LEFT JOIN org_lookup ON event_main.event_id = org_lookup.event_id
LEFT JOIN organization ON org_lookup.org_id = organization.org_id
LEFT JOIN type_lookup ON event_main.event_id = type_lookup.event_id
LEFT JOIN event_type ON type_lookup.type_id = event_type.type_id
LEFT JOIN topic_lookup ON event_main.event_id = topic_lookup.event_id
LEFT JOIN event_topic ON topic_lookup.topic_id = event_topic.topic_id;";

$result = prcSQL($mysqli, $query);

// Build the array(s) that will be returned
$assoc_org = [];
$event_types = [];
$event_topics = [];
$i=1;
while($row = $result->fetch_assoc()) {
	if($oldRowId!==$row['id'] && $i !== 1) {
		$tempArr['orgs'] = $assoc_org;
		$tempArr['types'] = $event_types;
		$tempArr['topics'] = $event_topics;
		$returnArr[]= $tempArr;
		$assoc_org = [];
		$event_types = [];
		$event_topics = [];
		//echo json_encode($assoc_org);
	}
	$tempArr['id'] = $row['id'];
	$tempArr['title'] = $row['title'];
	$tempArr['descrip'] = $row['descrip'];
	$tempOrg['org']= $row['org'];
	if(!(in_array($tempOrg, $assoc_org))){
		//echo json_encode($tempOrg);
		
		//echo " <--Comapares to--> ";
		//$tempOrg['org']= $row['org'];
		$assoc_org[]=$tempOrg;
		//echo json_encode($assoc_org);
		//echo "<br>";
	}
	$tempArr['beg_date_time'] = $row['beg_date_time'];
	$tempArr['end_date_time'] = $row['end_date_time'];
	$tempArr['event_cost'] = $row['event_cost'];
	
	$tempType['type']= $row['type'];
	if(!(in_array($tempType, $event_types))){
		$event_types[]=$tempType;
	}
	
	$tempTopic['topic']= $row['topic'];
	if(!(in_array($tempTopic, $event_topics))){
		$event_topics[]=$tempTopic;
	}
	
	$tempArr['lat'] = $row['lat'];
	$tempArr['lng'] = $row['lng'];
	$tempArr['addr1'] = $row['addr1'];
	$tempArr['addr2'] = $row['addr2'];
	$tempArr['addr3'] = $row['addr3'];
	
	$oldRowId = $row['id'];
	$i++;
	
	/*
	foreach($row as $item) {
		echo $item ." ";
	} 
	echo "<br>";
	*/
}
$tempArr['orgs'] = $assoc_org;
$tempArr['types'] = $event_types;
$tempArr['topics'] = $event_topics;
$returnArr[]= $tempArr;

echo json_encode($returnArr);
$result->close();
$mysqli->close();

?>