<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Home"; 
	$PageQuote = "Better to fight for something than to live for nothing.";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/home.css -->
		<link rel="stylesheet" href="/_/css/home.css" />
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
					<div class="feature">
						<div class="feature-content">
							<p>
								Stories and Artifacts<br/> 
								from the Life and<br />
								Leadership of
							</p>
							<h1>General Patton</h1>
							<hr />
							<footer>Fort Knox, Kentucky</footer>
						</div>
					</div>


					<div class="row site-links">

						<?php
							$now = time();
							$winter_start = mktime(0,0,0,12,1,2016);
							$winter_end = mktime(0,0,0,3,31,2017)
						?>

						<div class="col-md-12 col-lg-6">
							<img src="/_/img/home/museum-flag.jpg" class="img-fluid" />

							<div id="Announcement" class="hours">
								<?php if ($now > $winter_start && $now < $winter_end) : ?>
									<p>
										<b class="date-header">Winter Museum Hours</b><br />
										January 1 - March 31, 2017<br />
								        Tue-Sat: 10:00am - 3:00pm EST
								    </p>								    
							    <?php endif; ?>
							    <p>
							    	<b class="date-header">Regular Museum Hours</b><br />
									April 1 - December 31, 2017<br />
								    Tue-Sat: 10:00am - 4:30pm EST
								</p>

								<p><b class="date-header">Open:</b><br />
									May 29, 2017 Memorial Day <br />
									July 4, 2017 Independence Day        <br />
									November 10, 2017 Veterans Day<br />
									November 11, 2017 Veterans Day
								</p>

								<p><b class="date-header">Free Admission</b></p>

							</div>

						</div>

						<div class="col-md-12 col-lg-6">
							<div class="hours">

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
							</div>
						</div>


					</div>

				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

