function initialize() {
	 mapOptions = {
		zoom: 5,
		center: new google.maps.LatLng(47.60972, -122.3331)
	};
	map = new google.maps.Map(document.getElementById('map_area'),
		mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Make the function to use an event div to use the records of the fake json object.
