<?php
//include'/home/jingujin/public_html/ITGuys/common.php';

//$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

echo "<br><i>Inserting phony types and topics into the database.</i><br>";

$query = "INSERT INTO event_topic (topic_name) VALUES ('Sea Level')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_topic (topic_name) VALUES ('Climate Change')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_topic (topic_name) VALUES ('Over Fishing')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_topic (topic_name) VALUES ('Deforestation')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_topic (topic_name) VALUES ('Electric Vehicles')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('Walk')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('Rally')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('March')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('Sit-In')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('Talk')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('Symposium')";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_type (type_name) VALUES ('Outreach')";
prcSQL($mysqli, $query);

//$mysqli->close();
?>