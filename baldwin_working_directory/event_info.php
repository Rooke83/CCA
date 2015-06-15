<?php
$id = $_GET['id'];

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
?>