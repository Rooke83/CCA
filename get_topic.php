<?
include'/home/jingujin/public_html/ITGuys/common.php';

$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

$query = "SELECT * FROM event_topic";

$result = prcSQL($mysqli, $query);


while($row = $result->fetch_assoc()) {
	$tempArr['topic_id'] = $row['topic_id'];
	$tempArr['topic_name'] = $row['topic_name'];
	$finalArr[] = $tempArr;
}

echo json_encode($finalArr);
$mysqli->close();
?>