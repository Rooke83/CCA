<?php
//include'/home/jingujin/public_html/ITGuys/common.php';

//$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

echo "<br><i>Inserting phony organizations into the database.</i><br>";

$query = "INSERT INTO organization (org_name, email) VALUES ('Association for the Birds', 'birdy@birdassoc.org');";
prcSQL($mysqli, $query);

$query = "INSERT INTO organization (org_name, email) VALUES ('Planet Watch', 'pam@planetwatch.org');";
prcSQL($mysqli, $query);

$query = "INSERT INTO organization (org_name, email) VALUES ('Friends of Marine Life', 'nooneknowsimasealontheinternet@foml.org');";
prcSQL($mysqli, $query);

$query = "INSERT INTO organization (org_name, email) VALUES ('Earth Ministry', 'paula@earthministry.org');";
prcSQL($mysqli, $query);

$query = "INSERT INTO organization (org_name, email) VALUES ('The Northwest EcoBuilding Guild', 'fake@example.com')";
prcSQL($mysqli, $query);

$query = "INSERT INTO organization (org_name, email) VALUES ('North Seattle College Environmental Group', 'fake@example.com')";
prcSQL($mysqli, $query);

$query = "INSERT INTO organization (org_name, email) VALUES ('GoGreen', 'fake@example.com')";
prcSQL($mysqli, $query);
//$mysqli->close();

?>
