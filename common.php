<?php

function getDBConnect($username, $password, $DBName) {
	// connect to database
	$mysqli = new mysqli('localhost', $username, $password, $DBName);
	
	if($mysqli->connect_error) {
		die('Connect error ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
	}
	
//	echo "Connection successful... " . $mysqli->host_info . "<br><br>";
	
	return $mysqli;
	
}

function getGeo($street, $city ){
	$baseURL = "http://maps.googleapis.com/maps/api/geocode/json?address=";
	//$add1 = "9227 Interlake Ave N";
	//$add3 = "Seattle, WA 98103";

	$URL = str_replace(" ", "+", $baseURL . $street .", " . $city);

	$json = file_get_contents($URL);
	$json = json_decode($json);

	$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
	$lng = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

	$latLng['lat'] = $lat;
	$latLng['lng'] = $lng;
	
	return $latLng;
}

function prcSQL($mysqli, $query) {
	
	$result = $mysqli->query($query);
	
	if($mysqli->errno) {
		die('Query error (' . $mysqli->errno . ') ' . $mysqli->error);
	}
	
	if (is_object($result)) {
		return $result;
	} else {
		echo "Query successful...<br>";
	}
	
}
?>