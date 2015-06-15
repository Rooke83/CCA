<?php
//include'/home/jingujin/public_html/ITGuys/common.php';

//$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

echo"<br><i>Inserting phony users into database.</i><br>";

$query = "INSERT INTO users (fname, lname, email, user_name)VALUES ('Bart', 'Bizclark', 'Bart@example.com', 'Bizzy Bee');";
prcSQL($mysqli, $query);

$query = "INSERT INTO users (fname, lname, email, user_name)VALUES ('Alice', 'Kretchendorf', 'kretch@example.com', 'Krethinator');";
prcSQL($mysqli, $query);

$query = "INSERT INTO users (fname, lname, email, user_name)VALUES ('Samuel', 'Beckett', 'quantom@leap.org', 'LeapHome');";
prcSQL($mysqli, $query);

$query = "INSERT INTO users (fname, lname, email, user_name)VALUES ('Notta', 'Seal', 'ooneknowsimasealontheinternet@foml.org', 'normARFuser');";
prcSQL($mysqli, $query);

//$mysqli->close();
?>