DROP DATABASE IF EXISTS CascadiaDB;
CREATE DATABASE IF NOT EXISTS CascadiaDB;

USE CascadiaDB;

CREATE TABLE IF NOT EXISTS Events
(
	event_id int NOT NULL AUTO_INCREMENT;
	name VARCHAR(255),
	description TEXT,
	beg_date_time DATETIME,
	end_date_time DATETIME,
	event_type SET,
	event_topic SET,
	event_cost FLOAT,
	organization INT,
	event_creator INT,
	event_URL VARCHAR(2083),
	admin_notes TEXT,
	event_status BOOL,
	event_loc_lat FLOAT,
	event_loc_lng FLOAT,
	event_city_state INT FK,
	event_loc_address VARCHAR(255),
	event_loc_desc TEXT,
	PRIMARY KEY (event_id),
	FOREIGN KEY (event_creator) REFERENCES User(user_ID),
	FOREIGN KEY (orgization) REFERENCES Organization(org_ID)
)

CREATE TABLE IF NOT EXISTS CitySate
(
	city_id INT AUTO_INCREMENT, 
	city VARCHAR(255),
	state VARCHAR(8),
	zip INT,
	PRIMARY KEY (city_id),
	FOREIGN KEY (zip) REFERENCES Zip(zip_id)
)

CREATE TABLE IF NOT EXISTS Zip
(
	zip_id INT NOT NULL AUTO_INCREMENT,
	zip_code INT,
	PRIMARY KEY (zip_id)
)

CREATE TABLE IF NOT EXISTS User
(
	user_id INT NOT NULL AUTO_ICREMENT,
	fname VARCHAR(255),
	lname VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255),
	user_name VARCHAR(255),
	admin BOOL,
	PRIMARY KEY (user_id)
)

CREATE TABLE IF NOT EXISTS Organization

(
	org_id INT NOT NULL AUTO_ICREMENT,
	name VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (org_id)
)