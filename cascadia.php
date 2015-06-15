<?php
	
?>

<!doctype html>
<html>
	<head>
		<title>Welcome to Cascadia!</title>
		<meta charset='utf-8'>
		<link href="cascadia.css" type="text/css" rel="stylesheet"/>
		<script src="cascadia.js" type="text/javascript"></script>
	</head>
	<body>
		<h1 align="center">Welcome to Cascadia <i>username</i>!</h1>
		<div id="myevents_container">
			Your Events:</br>
			You don't have any events at this time.
		</div>
		<div align="center">
		<input type="button" id="home" value="Home" onclick="window.location.href='/ITGuys/cascadia.html'"/>
		<input type="button" id="add_event" value="Add Event" onclick="window.location.href='/ITGuys/cascadia_add_events.php'"/>
		<input type="button" id="cancel_event" value="Cancel" onclick="window.location.href='/ITGuys/cascadia.html'"/>
		</div>
	</body>
</html>