<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Get Directions"; 
	$PageQuote = "Take calculated risks, that is quite different than being rash.";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/visit/directions.css -->
		<link rel="stylesheet" href="/_/css/visit/directions.css" />
		<!-- endbuild -->
	</head>
	<body>

		<?php require_once(FRAGMENTS."/site-header.inc"); ?>

		<main class="container">
			<div class="row">
				<aside id="SiteNav" class="col-md-3">
					<?php require_once(FRAGMENTS."/site-nav.inc"); ?>
				</aside>

				<section id="PrimaryContent" class="col-md-9"> 
					<h1 class="page-title">Get Directions</h1>
					<p>
						The General Patton Museum is located in Fort Knox, KY, just off of Highway 31W.
					</p>

					<h3 class="section-title">Address</h3>
					<address>
						4554 Fayette Avenue<br />
						Fort Knox, Kentucky<br />
						40121-0208
					</address>

					<h3 class="directions-header">Directions</h3>
					<div class="row">
						<div class="col-sm-6 directions">
							<h4 class="section-title">From the North</h4>
							<ol>
								<li>Take I-65 to I-265 West.</li>
								<li>Take Exit 1 from I-265 onto US-31W toward Fort Knox.</li>
								<li>Continue on US-31W to the East Bullion Blvd exit and proceed to the Chaffee Gate.</li>
								<li>Follow the signs to the Patton Museum.</li>
							</ol>
						</div>

						<div class="col-sm-6 directions">
							<h4 class="section-title">From the South</h4>
							<ol>
								<li>From I-65, take Exit 91 toward Paducah/Fort Know and merge onto Western Kentucky Parkway.</li> 
								<li>Take Exit 136 from the Western Kentucky Parkway onto the Elizabethtown Bypass North toward Fort Knox.</li>
								<li>At the end of the Bypass, turn left onto US31-W/Dixie Highway.</li>
								<li>Continue on US-31W to the East Bullion Blvd exit and proceed to the Chaffee Gate.</li>
								<li>Follow the signs to the Patton Museum.</li>
							</ol>
						</div>
					</div>
					<p>
						At the Chaffee Gate, all adults must present a valid photo ID such as a driver's license.<br/>
						<a href="http://www.knox.army.mil/About/entering.aspx" target="_blank">Read more information</a> about entering Fort Knox.
						If your driver's license is from the states of Illinois, Minnesota,
						Missouri, New Mexico or Washington, please bring an additional form of ID. A
						list of acceptable forms of ID can be found <a href="http://www.knox.army.mil/About/realid.aspx">here</a>. Youth under the age of 18 are
						not required to show an ID. Foreign Nationals are not admitted to the Fort
						Knox Military Post.
					</p>

					<div id="MapContainer"></div>

				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

		<!-- build:js(src) /_/js/directions.js -->
		<script src="/_/js/maps.js"></script>
		<script src="/_/js/directions.js"></script>
		<!-- endbuild -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGLE_API_KEY;?>&callback=onMapsApiLoaded"></script>


	</body>
</html>



