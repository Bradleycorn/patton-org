<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php
	$PageTitle = "Plan Your Visit";
	$PageQuote = "Better to fight for something than to live for nothing";
	$CalloutCopy = "Extraordinary stories of Patton's upbringing, education, and monumental achievements";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/visit/home.css -->
		<link rel="stylesheet" href="/_/css/visit/home.css" />
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

					<h1 class="page-title"><?=$PageTitle;?></h1>
					<p>
						Welcome to the General George Patton Museum, where the legacy of leadership continues to inspire each generation. Come explore the history of the United States Army through personal stories, artifacts and film while viewing the foremost collection of Patton material in the world. Let the General George Patton Museum inspire you, awe you, and enlighten you.
					</p>

					<?php require_once(SNIPPETS."/page-callout.inc"); ?>

					<div class="row">
						<div class="col-sm-8">
							<p>
								<b class="date-header">
									MUSEUM CLOSED TO THE PUBLIC <br />
       								November 1, 2017- June 1, 2018 <br />
										For Building &amp; Visitor Access Improvements
								</b>
					        </p>
					        <p>
					        	We regret any inconvenience this may cause, but look
								forward to offering an even better museum experience.
								<br />
					            Thank You for Your Support.
					        </p>
					        <p>
						    	Please check this space for future updates.
						    </p>

							<h4 class="section-title">Hours</h4>

							<?php
								$now = time();
								$winter_start = mktime(0,0,0,12,1,2016);
								$winter_end = mktime(0,0,0,3,31,2017)
							?>
							<?php if ($now > $winter_start && $now < $winter_end) : ?>
								<p class="date-callout">
									<b class="date-header">Winter Hours:</b> <br />
									January 1 - March 31, 2017<br />
							        Tue-Sat: 10:00am - 3:00pm EST
							    </p>
							<?php endif; ?>

						    <p>
								<b class="date-header">Regular Hours:</b><br />
								April 1 - October 31, 2017<br />
							    <b>Tuesday - Friday</b><br />
							    10:00am - 4:30pm EST<br />
							    <b>Saturdays &amp; Federal Holidays</b><br />
							    10:00am - 5:30pm EST
							</p>

							<!--p><b class="date-header">Open:</b><br />
								May 29, 2017 Memorial Day <br />
								July 4, 2017 Independence Day        <br />
								November 10, 2017 Veterans Day (observed)<br />
								November 11, 2017 Veterans Day
							</p-->

							<p><b class="date-header">Closed:</b></br>
								Sundays &amp; Mondays<br />

								 <br />
						        January 16, 2017 Martin Luther King Day<br />
						        February 20, 2017 Presidents' Day<br />
						        September 4, 2017 Labor Day<br />
						        October 9, 2017 Columbus Day<br />
						        November 23, 2017 Thanksgiving Day<br />
						        December 25, 2017 Christmas Day
					        </p>

							<h4 class="section-title">Admission</h4>
							<p>
								Admission to the General George Patton Museum is free. The museum is open to the public. Self-guided tours.
							</p>
						</div>
						<div class="col-sm-4">

							<nav class="page-menu">
								<header>More Information</header>
								<ul class="list-unstyled">
									<li><a href="/visit/directions.php">Directions</a></li>
									<li><a href="/visit/nearby-attractions.php">Nearby Attractions</a></li>
									<li><a href="/visit/groups.php">Groups &amp; Field Trips</a></li>
									<li><a href="/faq.php">FAQ</a></li>
								</ul>
							</nav>


						</div>
					</div>

				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

