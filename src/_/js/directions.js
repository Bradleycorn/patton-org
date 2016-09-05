/* global GoogleMap */

var googleMap = new GoogleMap(null, true);
var MARKER_TITLE = "General Patton Museum";
var MARKER_LAT = 37.89640;
var MARKER_LNG = -85.97399;

/* exported onMapsApiLoaded */
function onMapsApiLoaded() {
	googleMap.loadMap("MapContainer", 10);
	googleMap.addLocation(MARKER_TITLE, MARKER_LAT, MARKER_LNG, true, true);
	googleMap.setOnMarkerClicked(function(markerId, location) {
		googleMap.showLocationInfo(MARKER_TITLE, "Placeholder Content in directions.js");
	});
}
/*
$(".campus").click(function(e) {
	if ($(e.target).hasClass("btn-normal")) {
		//a button was clicked, don't do anything
		return;
	}

	var slug = $(this).data("slug");
	googleMap.toggleMarkerBounce(slug, false);
	googleMap.showCampusInfo(slug, $(this).find(".info-window").clone()[0]);
});

$(".campus").hover(
	function() {
		var slug = $(this).data("slug");
		googleMap.hideInfoWindow();
		googleMap.toggleMarkerBounce(slug, true);
	},

	function() {
		var slug = $(this).data("slug");
		googleMap.toggleMarkerBounce(slug, false);

	}
);
*/