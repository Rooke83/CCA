<?php
include 'common.php';

$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');
$mysqli->close();

$latLng = getGeo('9227 Interlake Ave N', 'Seattle, WA 98103');

foreach($latLng as $key=>$value) {
	echo $key . "=>" . $value . "<br />";
}
?>