<!doctype html>
<html>
	<head>
		<title>Add A Cascadia Event!</title>
		<meta charset='utf-8'>
		<link href="cascadia.css" type="text/css" rel="stylesheet"/>
		<script src="cascadia_add_events.js" type="text/javascript"></script>
	</head>
	<body>
		<h1 align="center">Add A Cascadia Event!</h1>
		<div id="add_main_div">
		<form action="insert_event.php" method="post">
			<div align="center">
				Event Name: <input type="text" name="event_name"/></br></br>
					<div align="left">
					Event Description:</br>
					</div>
				<textarea name="event_textarea" rows="4" cols="60"></textarea>
			</div>
			Start Time: <input type="time" name="start_time"/></br>
			End Time: <input type="time" name="end_time"/></br>
			Address: <input type="text" name="address"/></br>
			Cost: <input type="text" name="cost"/></br>
			<div id="add_event_type_check_boxes">Event Types:</br></div>
			<div id="add_event_topic_check_boxes">Event Topics:</br></div>
			<input type="submit" name="submit" value="Submit"/>
		</form>
		</div>
	</body>
</html>