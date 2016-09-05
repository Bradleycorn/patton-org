<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Groups & Field Trips"; 
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
						Groups &amp; Field Trips
					</div>

					<h1 class="page-title"><?=$PageTitle;?></h1>
					
					<h4 class="section-title">Planning a Group Visit to the General George Patton Museum?</h4>
					<p>
						Group tours are free. Please call the museum at <a href="tel:5026246350">(502) 624-6350</a> to schedule a tour. 
						Donations to support the program are always welcome. 
						If you have any questions or special requirements please don't hesitate to contact the 
						museum at <a href="tel:5026246350">(502) 624-6350</a> or <a href="mailto:education@generalpatton.org">email us</a>.
					</p>
					 

					<h4 class="section-title">Bus and Handicap Accessibility Information</h4>

					<p>
						Buses may park in the parking lot directly off 31W and vistors can walk to the museum without 
						entering Fort Knox. For buses with visitors requiring wheelchairs, we advise the bus to enter 
						Fort Knox using the Brandenburg Gate. Valid ID will be required for admission onto post. 
						No guns or weapons of any kind are allowed on post. For directions while on post to the 
						museum please call <a href="tel:5026246350">502-624-6350</a> or <a href="mailto:education@generalpatton.org">email</a>.
					</p>

					<p>The General George Patton Museum is wheelchair accessible.</p>
					 


					<h4 class="section-title">Planning a field trip?</h4>

					<p>
						The General George Patton Museum offers a wide range of field trips for students. Field trips are free, though donations (we suggest a $20.00 donation to the Patton Museum Foundation) are always appreciated!
						It is preferred that you book three weeks ahead in order to secure a volunteer tour guide. To book a tour, please call (502) 624-6350.
					</p>
					

					<b>When booking a tour please include:</b>
					<ul>
						<li>the number of students/visitors attending so we can provide sufficient guides</li>
						<li>the grade level/age of the students/visitors (if adults just enter adults)</li>
						<li>name of the school or organization</li>
						<li>the time and date of your tour (and an alternative if we are unable to support your original request)</li>
					</ul>

					<p>
						If possible, to familiarize your students with the museum prior to your arrival, you may use our online pre visit lesson plans. Students/Visitors will be met inside the museum by their tour guide. Extremely large groups should be divided, prior to entering the museum, to make guiding easier. There are restrooms immediately inside the museum. All tours are required to fill out a group visit form upon arrival.
					</p>

					<b>Student/Visitor please remember:</b>

					<ul>
						<li>There is no food or drink allowed inside the museum. Special permission is required for food to be brought into the museum</li>
						<li>Walk, do not run while inside the museum.</li>
						<li>The museum is a public facility. Please do not yell while inside the museum. There are many other visitors, including soldiers, inside the museum.</li>
					</ul>
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

