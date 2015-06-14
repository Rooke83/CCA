<?
include'/home/jingujin/public_html/ITGuys/common.php';

$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

$query = "SELECT * FROM event_type";

$result = prcSQL($mysqli, $query);

while($row = $result->fetch_assoc()) {
	$tempArr['type_id'] = $row['type_id'];
	$tempArr['type_name'] = $row['type_name'];
	$finalArr[] = $tempArr;
}

echo json_encode($finalArr);
$mysqli->close();
?>