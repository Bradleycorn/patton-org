<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Nearby Attractions"; 
	$PageQuote = "Better to fight for something than to live for nothing";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/visit/nearby-attractions.css -->
		<link rel="stylesheet" href="/_/css/visit/nearby-attractions.css" />
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
					<div class="breadcrumbs">
						<a href="/visit/">Plan Your Visit</a>
						Nearby Attractions
					</div>

					<h1 class="page-title"><?=$PageTitle;?></h1>
					
					<p>While you are visiting Fort Knox there plenty of other things to do and see in the local area. Contact the <a href="http://www.radclifftourism.org/" target="_blank">Radcliff/Fort Knox Tourism Commission</a> for places to stay and visit.</p>

					<p>					
						<b>Interested in staying at Fort Knox with your family or scout group?</b><br/>
						Try <a href="http://www.knoxmwr.com/template.asp?id=48" target="_blank">Camp Carlson</a>.
					</p>
	
					<h4 class="section-title">Local Attractions within 10 Miles of the General George Patton Museum</h4>

					<p>
						<b>West Point:</b><br/>
						West Point is a treasure trove of interesting things to do and see. Antiques, the Civil War site of Fort Duffield and Tioga Falls are just a few of the things to do in West Point. 10 miles north of the General George Patton Museum on 31W.<br/>
						<a href="http://www.kentuckytourism.com/tourism/KI.Tourism.CMS.Templates/InterestResultsByRegionPage.aspx?NRMODE=Published&NRNODEGUID=%7b11F6B1C1-F9D2-4208-8547-9EBDC4FCC469%7d&NRORIGINALURL=%2fsitestosee%2fderbyregion%2ehtm&NRCACHEHINT=Guest" target="_blank">West Point Tourism</a>
					</p>
 
					<p>
						<b>Radcliff/Fort Knox:</b><br/>
						Fort Knox has a water park on site or take a pleasant walk through Sanders Springs. The Radcliff/Fort Knox area is part of the Lincoln heritage. Thomas Lincoln, father of President Lincoln bought land in the Fort Knox area and his mother Bathsheba is buried at the Mill Creek Baptist Church Cemetery now known as the Lincoln Memorial Cemetery, Fort Knox. To get to Saunders Springs just take the North Wilson Rd.<br />
						<a href="http://www.radclifftourism.org/" target="_blank">Radcliff/Fort Knox Tourism Commission</a>
					</p> 

					<p>
						<b>Vine Grove:</b><br/>
						Historic Vine Grove is home to quaint little shops, tea rooms and the Bluegrass Festival in September. 10 miles from the General George Patton Museum, take 31W South, then KY-144.<br/>
						<a href="http://www.vinegrove.org/" target="_blank">Vine Grove Tourism</a>
					</p>
 

					<p>
						<b>Otter Creek Park:</b><br/>
						A 2600 acre park, Otter Creek offers a nature center, an observatory and more. 6 miles from the General George Patton Museum, take 31 W. north turn left onto KY Highway 1638 and follow this road to Otter Creek Park (2.8 miles on the right).<br/>
						<a href="http://www.louisvilleky.gov/MetroParks/parks/ottercreek/" target="_blank">Otter Creek Tourism					</a>
					</p>

					<h4 class="section-title">Local Attractions within 15 Miles of the General George Patton Museum</h4>

					<p>
						<b>Elizabethtown:</b><br />
						Elizabethtown is the Seat of Hardin County. Boasting museums, shopping, festivals and more, Elizabethtown is well worth a visit.<br />
						<a href="http://www.touretown.com/" target="_blank">Elizabethtown Tourism</a>
					</p>
 

					<p>
						<b>Brandenburg:</b><br />
						General John Hunt Morgan Civil War Driving Trail and Buttermilk Falls are part of the attractions of Meade County.<br />
						<a href="http://www.brandenburgky.org/" target="_blank">Brandenburg Tourism</a>
					</p>

				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

