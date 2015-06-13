<?php

?>

<!doctype html>
<html>
	<head>
		<title>Add A Cascadia Event!</title>
		<meta charset='utf-8'>
		<link href="cascadia.css" type="text/css" rel="stylesheet"/>
		<script src="cascadia.js" type="text/javascript"></script>
	</head>
	<body>
		<h1 align="center">Add A Cascadia Event!</h1>
		<div id="add_main_div">
			<div align="center">
			<form>
				Event Name: <input type="text" id="event_name"/></br></br>
					<div align="left">
					Event Description:</br>
					</div>
				<textarea id="event_textarea" rows="4" cols="60"></textarea>
			</div>
			Start Time: <input type="time" id="start_time"/></br>
			End Time: <input type="time" id="end_time"/></br>
			Address: <input type="text" id="address"/></br>
			Cost: <input type="text" id="cost"/></br>
			<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>
