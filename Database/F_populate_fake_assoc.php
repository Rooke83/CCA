<?php
//include'/home/jingujin/public_html/ITGuys/common.php';

//$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

echo "<br><i>Inserting phony associations into the database.</i><br>";

$query = "INSERT INTO type_lookup VALUES (1, 1);";
prcSQL($mysqli, $query);

$query = "INSERT INTO type_lookup VALUES (1, 2);";
prcSQL($mysqli, $query);

$query = "INSERT INTO org_lookup VALUES (1, 3);";
prcSQL($mysqli, $query);

$query = "INSERT INTO org_lookup VALUES (1, 2);";
prcSQL($mysqli, $query);

$query = "INSERT INTO topic_lookup VALUES (1, 1);";
prcSQL($mysqli, $query);

$query = "INSERT INTO type_lookup VALUES (2, 5);";
prcSQL($mysqli, $query);

$query = "INSERT INTO topic_lookup VALUES (2, 2);";
prcSQL($mysqli, $query);

$query = "INSERT INTO org_lookup VALUES (2, 4);";
prcSQL($mysqli, $query);

$query = "INSERT INTO org_lookup VALUES (3, 5);";
prcSQL($mysqli, $query);

$query = "INSERT INTO topic_lookup VALUES (3, 5);";
prcSQL($mysqli, $query);

$query = "INSERT INTO topic_lookup VALUES (3, 2);";
prcSQL($mysqli, $query);

$query = "INSERT INTO type_lookup VALUES (3, 6);";
prcSQL($mysqli, $query);

$query = "INSERT INTO topic_lookup VALUES (4, 2);";
prcSQL($mysqli, $query);

$query = "INSERT INTO type_lookup VALUES (4, 7);";
prcSQL($mysqli, $query);
//$mysqli->close();
?>