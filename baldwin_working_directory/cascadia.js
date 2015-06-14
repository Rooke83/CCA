function initialize() {
	
	// Initial setup of the map
	mapOptions = {
		zoom: 5,
		center: new google.maps.LatLng(47.60972, -122.3331)
	};
	map = new google.maps.Map(document.getElementById('map_area'),
	mapOptions);
	// End of the initial setup of the map
	
	getEventTypes();
	getEventTopics();
	getEventAgenda();
	
	
	var findNearEventsButton = document.getElementById('find_near_events');
	var findEventsButton = document.getElementById('find_events');
	findNearEventsButton.addEventListener('click', findNearEvents);
	findEventsButton.addEventListener('click', findEvents);
}

function findNearEvents() {
	var xmlhttp = new XMLHttpRequest();
	
}

// Event div to use the records of the fake json object.
function findEvents() {
	var xmlhttp = new XMLHttpRequest();
	
}

function getEventTypes() {
	// AJAX request for event type checkboxes
	var xmlhttp = new XMLHttpRequest();
	var url = "/ITGuys/get_type.php";
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var eventTypObj = JSON.parse(xmlhttp.responseText);
			for(var i = 0; i < eventTypObj.length; i++) {
				// Create the checkboxes
				var checkboxes = document.createElement('input');
				checkboxes.type = "checkbox";
				checkboxes.id = "ty" + eventTypObj[i]['type_id'];
				checkboxes.value = eventTypObj[i]['type_name'];
				checkboxes.checked = false;
				// Create the labels next to the checkboxes
				var labels = document.createTextNode(checkboxes.value);
				// Add the checkboxes and their labels to the event type div
				document.getElementById('event_type_checkbox').appendChild(checkboxes);
				document.getElementById('event_type_checkbox').appendChild(labels);
			}
		}
	}
	xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function getEventTopics() {
	// AJAX request for event topic checkboxes
	var xmlhttp = new XMLHttpRequest();
	var url = "/ITGuys/get_topic.php";
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var eventTopObj = JSON.parse(xmlhttp.responseText);
			for(var i = 0; i < eventTopObj.length; i++) {
				// Create the checkboxes
				var checkboxes = document.createElement('input');
				checkboxes.type = "checkbox";
				checkboxes.id = "to" + eventTopObj[i]['topic_id'];
				checkboxes.value = eventTopObj[i]['topic_name'];
				checkboxes.checked = false;
				// Create the labels next to the checkboxes
				var labels = document.createTextNode(checkboxes.value);
				// Add the checkboxes and their labels to the event topic div
				document.getElementById('event_topic_checkbox').appendChild(checkboxes);
				document.getElementById('event_topic_checkbox').appendChild(labels);
			}
		}
	}
	xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function getEventAgenda() {
	var xmlhttp = new XMLHttpRequest();
	var url = "/ITGuys/get_events.php";
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var agendaObjs = JSON.parse(xmlhttp.responseText);
			for(var i = 0; i < agendaObjs.length; i++) {
				var createEvent = createEventDiv(agendaObjs[i]);
				document.getElementById('agenda_container').appendChild(createEvent);
				var id = agendaObjs[i]['id'];
				//$(document).ready(function(){("#" + id).dotdotdot({});});
				//var moreLinkDivs = document.createElement('div');
				//moreLinkDivs.className = 'event_div_link';
				//moreLinkDivs.innerHTML = "<p class='link'>More...</p>";
				//var id = agendaObjs[i]['id'];
				//$("#" + id).append(moreLinkDivs);
			}
			$(document).ready(function() {
			    $(".event_div").dotdotdot({
					after: "a.readmore"
			    });
			});
		}
	}
	xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function createEventDiv(eventObj) {
	var agendaDivs = document.createElement('div');
	var eventDateBegTime = formatDateTime(eventObj['beg_date_time']);
	var eventDateEndTime = formatDateTime(eventObj['end_date_time']);
	var eventCityState = formatDateTime(eventObj['addr3']);
	var eventType = getSubJSON(eventObj['types'], 'type'); 
	agendaDivs.id = eventObj['id'];
	agendaDivs.className = 'event_div'; 
	agendaDivs.innerHTML = "<p><b>" + eventDateBegTime[0] + "</b>" + "</br>" + 
						   "<i>" + eventObj['title'] + "</i>" + ", " + eventDateBegTime[1] + " to " + 
						   eventDateEndTime[1] + ", " + eventType + ", " + "(" + 
						   eventCityState[0] + " " + eventCityState[1] + ") " + eventObj['descrip'] + "</p>";
	return agendaDivs;
}

// returns an array
function formatDateTime(str) {
	var res = str.split(" ");
	return res;
}

// takes a array of JSON objects and returns an array of things at a given key 
function getSubJSON(array, key) {
	var returnArr = [];
	for (var i = 0; i < array.length; i++){
		returnArr.push(array[i][key]);
	}
	
	return returnArr;
}

google.maps.event.addDomListener(window, 'load', initialize);

