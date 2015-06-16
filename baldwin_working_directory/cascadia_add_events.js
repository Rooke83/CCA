function initialize() {
	getAddEventTypes();
	getAddEventTopics();
}

function getAddEventTypes() {
	// AJAX request for event type checkboxes
	var xmlhttp = new XMLHttpRequest();
	var url = "/ITGuys/get_type.php";
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var eventTypObj = JSON.parse(xmlhttp.responseText);
			for(var i = 0; i < eventTypObj.length; i++) {
				// Create the checkboxes
				var checkboxes = document.createElement('input');
				checkboxes.name = "type[]";
				checkboxes.type = "checkbox";
				checkboxes.value = eventTypObj[i]['type_id'];
				checkboxes.checked = false;
				// Create the labels next to the checkboxes
				var labels = document.createTextNode(eventTypObj[i]['type_name']);
				// Add the checkboxes and their labels to the event type div
				document.getElementById('add_event_type_check_boxes').appendChild(checkboxes);
				document.getElementById('add_event_type_check_boxes').appendChild(labels);
			}
		}
	}
	xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function getAddEventTopics() {
	// AJAX request for event topic checkboxes
	var xmlhttp = new XMLHttpRequest();
	var url = "/ITGuys/get_topic.php";
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var eventTopObj = JSON.parse(xmlhttp.responseText);
			for(var i = 0; i < eventTopObj.length; i++) {
				// Create the checkboxes
				var checkboxes = document.createElement('input');
				checkboxes.name = "topic[]";
				checkboxes.type = "checkbox";
				checkboxes.value = eventTopObj[i]['topic_id'];
				checkboxes.checked = false;
				// Create the labels next to the checkboxes
				var labels = document.createTextNode(eventTopObj[i]['topic_name']);
				// Add the checkboxes and their labels to the event topic div
				document.getElementById('add_event_topic_check_boxes').appendChild(checkboxes);
				document.getElementById('add_event_topic_check_boxes').appendChild(labels);
			}
		}
	}
	xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

window.onload = initialize;

