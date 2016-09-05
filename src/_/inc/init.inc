<?php
	set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

	//FILE PATHS
	define("DATA_PATH", $_SERVER['DOCUMENT_ROOT'] . "/_/res/data");
	define("IMG_PATH", "/_/img");
	define("INC_PATH", $_SERVER['DOCUMENT_ROOT'] . "/_/inc");
	define("FRAGMENTS", INC_PATH . "/fragments");
	define("SNIPPETS", INC_PATH . "/snippets");


	//Google API's
	define("GOOGLE_API_KEY", "AIzaSyDRg91mQPYDuy-ee-tjx14FpOzVjKfwdpk");


	require_once("_/inc/functions/base-functions.inc");

	//Variables to store Site/URL information
	$ServerName = $_SERVER['SERVER_NAME'];
	$ServerURL = GetSiteProtocol() . $ServerName;
	$SiteSection = null;
	$SubSection = null;
	$PageTitle = "";
	$PageDescription = "";
	$RequestMethod = strtoupper($_SERVER['REQUEST_METHOD']);

	//The Scripts array contains a list of external/erd party
	//javacript files that should be loaded on a given page.
	//To include a script on page, simply add it's name to the
	//array. For a list of available scripts, see the tail.php
	//in the page-fragments folder.
	$Scripts = array();

	SetSectionInfo();

	//SET SERVER SPECIFIC VARIABLES AND CONSTANTS
	switch ($ServerName) {
		case 'generalpatton.org':
		case 'www.generalpatton.org':
			define("LIVE", true);
			break;
		default: 
			define("LIVE", false);
			break;
	}

?>
