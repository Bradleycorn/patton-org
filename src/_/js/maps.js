/* global google */

var GoogleMap = function(domId, showLocations) {
	//The Google Map Object
	this.mGoogleMap = null;

	//The DOM ID of the element on the page that contains the map
	this.mDomId = domId;

	//Whether or not locations will be displayed on the map
	this.mShowLocations = showLocations;

	//An info window that can be displayed on the Map
	this.mInfoWindow = null;

	//An array to hold the set of markers displayed on the map
	this.mMarkers = [];

	//An array to hold a list of locations that are displayed on the map
	//each location should have a markerId property that corresponds
	//to an index in the mMarkers array indicating the marker that
	//identifies the location.
	this.mLocations = [];

	//A function that can be overriden to take custom action when a marker is clicked
	this.mOnMarkerClicked = function(markerId, campus) {
		//jshint unused:false
	};

	//Constant for the default center of the map (Louisville)
	this.MAP_CENTER = {lat: 38.02906, lng: -85.88418}; //{lat: 38.219113, lng: -85.7034995};
	
};


GoogleMap.prototype.loadMap = function(domId, zoomLevel) {
	this.mDomId = domId || this.mDomId;
	zoomLevel = zoomLevel || 11;

	var element = document.getElementById(this.mDomId);

	if (element) {
		this.mGoogleMap = new google.maps.Map(element, {
			center: this.MAP_CENTER,
			zoom: zoomLevel,
			zoomControl: true
		});

		this.mInfoWindow = new google.maps.InfoWindow({content: ""});

		if (this.mShowLocations && this.mLocations.length > 0) {
			this.addLocationsToMap();
		}
	} else {
		console.log("GOOGLE MAPS - No DOM element specified. Cannot load map.");
	}
};

GoogleMap.prototype.setStyle = function(mapStyles) {
	this.mGoogleMap.setOptions({styles: mapStyles});
};


GoogleMap.prototype.addLocation = function(name, lat, lng, addToMap, animate) {
	var location = {
		name: name,
		gps: {
			lat: lat,
			lng: lng
		}
	};

	location.markerId = this.createMarker(location.gps, location.name, animate, addToMap);

	this.mLocations.push(location);
};

GoogleMap.prototype.addLocationsToMap = function() {

	//If the map hasn't been created,
	//or campus data has not been loaded yet,
	//or the markers are already loaded,
	//then we don't need to do anything.
	if (this.mGoogleMap === null || this.mLocations.length < 1 || this.mLocations[0].markerId !== undefined) {
		return;
	}

	for (var i=0; i<this.mLocations.length; i++) {
		var location = this.mLocations[i];
		var image = {
			url: campus.icon,
			origin: new google.maps.Point(0,0),
			anchor: new google.maps.Point(0, 48)
		};
		location.markerId = this.createMarker(location.gps, location.name, true, true);
	}
};

GoogleMap.prototype.createMarker = function(latLng, name, animate, addToMap) {

	var marker = new google.maps.Marker({
		position: latLng,
		title: name
	});
	var markerId = this.mMarkers.length;

	var self = this;
	marker.addListener('click', function() {
		self.mOnMarkerClicked(markerId, self.getLocationFromMarker(markerId));
	});

	this.mMarkers.push(marker);

	if (animate) {
		marker.setAnimation(google.maps.Animation.DROP);
	} else {
		marker.setAnimation(null);
	}

	if (addToMap) {
		marker.setMap(this.mGoogleMap);
	}

	return markerId;
};

GoogleMap.prototype.setOnMarkerClicked = function(onClickFunction) {
	this.mOnMarkerClicked = onClickFunction;
};

GoogleMap.prototype.toggleMarkerBounce = function(marker, bounceOn) {

	if (!(marker instanceof google.maps.Marker)) {
		var location = this.findLocation(marker);
		if (location) {
			marker = this.mMarkers[location.markerId];
		} else {
			return;
		}
	}

	if (bounceOn) {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	} else {
		marker.setAnimation(null);
	}
};

GoogleMap.prototype.showInfoWindow = function(markerId, content) {
	this.mInfoWindow.setContent(content);
	this.mInfoWindow.open(this.mGoogleMap, this.mMarkers[markerId]);
};

GoogleMap.prototype.showLocationInfo = function(location, content) {
	location = this.findLocation(location);

	if (location === null) {
		return;
	}

	this.showInfoWindow(location.markerId, content);
};


GoogleMap.prototype.hideInfoWindow = function() {
	this.mInfoWindow.close();
};

GoogleMap.prototype.getLocationFromMarker = function(markerId) {
	for (var i=0; i<this.mLocations.length; i++) {
		if (this.mLocations[i].markerId === markerId) {
			return this.mLocations[i];
		}
	}
	return null;
};

GoogleMap.prototype.findLocation = function(location) {
	var i;

	if (!isNaN(location) && location >= 0 && location < this.mLocations.length) {
		return this.mLocations[location];
	}

	for (i=0; i<this.mLocations.length;i++) {
		if (this.mLocations[i].name.toLowerCase() === location.toLowerCase() ||
			this.mLocations[i].gps === location 
			) {

			return this.mLocations[i];
		}
	}

	return null;
};
