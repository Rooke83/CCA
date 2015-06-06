<?php
	$mysqli = new mysqli('localhost', 'jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

	if($mysqli->connect_error) {
		die('Connect error ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
	}
	
	/*
		Query and delete the tables if they exist so any modified tables
		can be created over them. This will prevent the "table already exists"
		error.
	*/
	$query = "DROP TABLE IF EXISTS organization;";
	$result = $mysqli->query($query);
	
	$query = "DROP TABLE IF EXISTS users;";
	$result = $mysqli->query($query);
	
	$query = "DROP TABLE IF EXISTS event_type;";
	$result = $mysqli->query($query);
	
	$query = "DROP TABLE IF EXISTS event_topic;";
	$result = $mysqli->query($query);
	
	$query = "DROP TABLE IF EXISTS event_main;";
	$result = $mysqli->query($query);
	
	$query = "DROP TABLE IF EXISTS type_lookup;";
	$result = $mysqli->query($query);
	
	$query = "DROP TABLE IF EXISTS topic_lookup;";
	$result = $mysqli->query($query);
	// END OF THE DROP OF THE TABLES
	
	/*
		Query and build the tables and check for successfully query
		for each, if so then return echo message that states the table has been 
		built successfully.
	*/
	$query = "CREATE TABLE IF NOT EXISTS organization
			 (
				org_id INT NOT NULL AUTO_INCREMENT,
				org_name VARCHAR(255),
				email VARCHAR(255),
				PRIMARY KEY (org_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "organization table successfully created!</br>";
	} else {
		echo "Couldn't create the organization table!</br>";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS users
			 (
				user_id INT NOT NULL AUTO_INCREMENT,
				fname VARCHAR(255),
				lname VARCHAR(255),
				email VARCHAR(255),
				password VARCHAR(255),
				user_name VARCHAR(255),
				PRIMARY KEY (user_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "users table successfully created!</br>";
	} else {
		echo "Couldn't create the users table!</br>";
		die('Query error (' . $mysqli->errno . ') ' . $mysqli->error);
	}
	
	$query = "CREATE TABLE IF NOT EXISTS event_type
		     (
				type_id INT NOT NULL AUTO_INCREMENT,
				type_name VARCHAR(255),
				PRIMARY KEY (type_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "event_type table successfully created!</br>";
	} else {
		echo "Couldn't create the event_type table!</br>";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS event_topic
			 (
				topic_id INT NOT NULL AUTO_INCREMENT,
				topic_name VARCHAR(255),
				PRIMARY KEY (topic_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "event_topic table successfully created!</br>";
	} else {
		echo "Couldn't create the event_topic table!</br>";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS event_main
			 (
				event_id INT NOT NULL AUTO_INCREMENT,
				event_name VARCHAR(255),
				description TEXT,
				beg_date_time DATETIME,
				end_date_time DATETIME,
				event_cost FLOAT,
				organization INT,
				submitted_by INT,
				event_URL VARCHAR(2083),
				admin_notes TEXT,
				event_status BOOL,
				event_loc_lat FLOAT,
				event_loc_lng FLOAT,
				event_address_line1 VARCHAR(255),
				event_address_line2 VARCHAR(255),
				event_address_line3 VARCHAR(255),
				event_loc_desc TEXT,
				version INT, -- to log previous versions
				PRIMARY KEY (event_id),
				FOREIGN KEY (submitted_by) REFERENCES users(user_id),
				FOREIGN KEY (organization) REFERENCES organization(org_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "event_main table successfully created!</br>";
	} else {
		echo "Couldn't create the event_main table!</br>";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS type_lookup
			 (
				event_id INT NOT NULL default '0',
				type_id INT NOT NULL default '0',
				PRIMARY KEY (event_id, type_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "type_lookup table successfully created!</br>";
	} else {
		echo "Couldn't create the type_lookup table!</br>";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS topic_lookup
			 (
				event_id INT NOT NULL default '0',
				topic_id INT NOT NULL default '0',
				PRIMARY KEY (event_id, topic_id)
			 );";
	$result = $mysqli->query($query);
	if($mysqli->query($query) === TRUE) {
		echo "topic_lookup table successfully created!</br>";
	} else {
		echo "Couldn't create the topic_lookup table!</br>";
	}
	// END OF THE CREATION OF THE TABLES

	// Return MySQL syntax error(s) if there are any errors for building the tables.
	if($mysqli->errno) {
		die('Query error (' . $mysqli->errno . ') ' . $mysqli->error);
	}

	$mysqli->close();
?>

