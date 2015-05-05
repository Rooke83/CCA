DROP DATABASE IF EXISTS CascadiaDB;
CREATE DATABASE IF NOT EXISTS CascadiaDB;

USE CascadiaDB;

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
	password VARCHAR(255),
	user_name VARCHAR(255),
	admin BOOL,
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

CREATE TABLE IF NOT EXISTS city
(
	city_id INT AUTO_INCREMENT,
	city VARCHAR(255),
	state VARCHAR(8),
	PRIMARY KEY (city_id)
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
	event_loc_address VARCHAR(255),
	event_loc_city INT,
	event_loc_desc TEXT,
	PRIMARY KEY (event_id),
	FOREIGN KEY (submitted_by) REFERENCES users(user_id),
	FOREIGN KEY (organization) REFERENCES organization(org_id),
	FOREIGN KEY (event_loc_city) REFERENCES city(city_id)
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

CREATE TABLE IF NOT EXISTS zip
(
	zip_id INT NOT NULL AUTO_INCREMENT,
	zip_code INT,
	PRIMARY KEY (zip_id)
);

CREATE TABLE IF NOT EXISTS zip_lookup
(
	zip_id INT NOT NULL default '0',
	city_id INT NOT NULL default '0',
	PRIMARY KEY (zip_id, city_id)
);