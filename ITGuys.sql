--IT GUYS
--Baldwin Browne
--Haimanot Belay
--Joaquin Bautista 

DROP TABLE IF EXISTS organization;

DROP TABLE IF EXISTS users;

DROP TABLE IF EXISTS event_type;

DROP TABLE IF EXISTS event_topic;

DROP TABLE IF EXISTS event_main;

DROP TABLE IF EXISTS type_lookup;

DROP TABLE IF EXISTS topic_lookup;

CREATE TABLE IF NOT EXISTS organization
	(
		org_id INT NOT NULL AUTO_INCREMENT,
		org_name VARCHAR(255),
		email VARCHAR(255),
		PRIMARY KEY (org_id)
	);
		 
CREATE TABLE IF NOT EXISTS users
	(
		user_id INT NOT NULL AUTO_INCREMENT,
		fname VARCHAR(255),
		lname VARCHAR(255),
		email VARCHAR(255),
		user_name VARCHAR(255),
		PRIMARY KEY (user_id)
	);

CREATE TABLE IF NOT EXISTS event_type
	(
		type_id INT NOT NULL AUTO_INCREMENT,
		type_name VARCHAR(255),
		PRIMARY KEY (type_id)
	);

CREATE TABLE IF NOT EXISTS event_topic
	(
		topic_id INT NOT NULL AUTO_INCREMENT,
		topic_name VARCHAR(255),
		PRIMARY KEY (topic_id)
	);

CREATE TABLE IF NOT EXISTS event_main
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
	);

CREATE TABLE IF NOT EXISTS type_lookup
	(
		event_id INT NOT NULL default '0',
		type_id INT NOT NULL default '0',
		PRIMARY KEY (event_id, type_id)
	);

CREATE TABLE IF NOT EXISTS topic_lookup
	(
		event_id INT NOT NULL default '0',
		topic_id INT NOT NULL default '0',
		PRIMARY KEY (event_id, topic_id)
	);