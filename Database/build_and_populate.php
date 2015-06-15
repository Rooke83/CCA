<?php

/*
A small script that teara down and rebuilds the database with fake data
*/

include'/home/jingujin/public_html/ITGuys/common.php';

// Establish connection to database
$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

include'A_build_cascadia.php';
include'B_populate_fake_users.php';
include'C_populate_fake_orgs.php';
include'D_populate_fake_type_topic.php';
include'E_populate_fake_events.php';
include'F_populate_fake_assoc.php';

$mysqli->close();
?>