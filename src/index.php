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

		<!-- REMOVE THIS ENTIRE STYLE TAG WHEN MUSEUM CLOSURE ENDS -->
		<style type="text/css">
			.museum-flag {
				background: url('/_/img/home/museum-flag.jpg') center bottom;
			}

			#SiteHeader .site-links.row {
				margin: 0;
			}

			#SiteHeader .site-links.row > div {
				padding: 0;
			}

			.site-links .hours {
				padding: 10px 5px;
				margin-left: 0 !important;
			}

			#Announcement {
				top: .6em;
			}
		</style>
	</head>
	<body>


		<!-- the museum is closing for renovations. We're going to
		remove the standard header for now, and put up a custom version
		with the closure info. When the museum reopens,
		re-enable the site-header.inc, and delete the custom header.
		Also, remove the <style> from the header of this page,
		and restore the main content area to it's normal state (see below) -->
		<?php //require_once(FRAGMENTS."/site-header.inc"); ?>

		<!-- BEGIN CUSTOM HEADER -->
		<header id="SiteHeader" class="container">
			<div class="row">
				<div id="SiteLogo" class="col-xs-3">
					<a href="/"><img src="/_/img/logos/site-logo.png" alt="General George Patton Museum" class="img-fluid" /></a>
				</div>
				<div class="col-xs-9">


					<div class="row site-links">
						<div class="col-md-12 col-lg-6">
							<div class="hours">

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
							</div>
						</div>

						<div class="museum-flag hidden-sm-down col-md-12 col-lg-6">
							<!--img src="/_/img/home/museum-flag.jpg" class="img-fluid" /-->

							<div id="Announcement" class="hours">
							    <p>
							    	<b class="date-header">Regular Museum Hours</b><br />
									April 1 - October 31, 2017<br />
									<b>Tuesday - Friday</b><br />
									10:00am - 4:30pm EST<br />
									<b>Saturdays &amp; Federal Holidays</b><br />
								    10:00am - 5:30pm EST
								</p>

								<p><b class="date-header">Free Admission</b></p>

							</div>

						</div>
					</div>


				</div>

			</div>
		</header>
		<!-- END CUSTOM HEADER -->


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

					<!-- SHOW THIS DURING MUSEUM RENOVATIONS -->
					<div id="HeaderBar">
						<div class="bar-wrapper">
							<div class="bar-content">
								<form id="SiteSearch" name="SiteSearch" action="/search.php" method="GET">
									<input type="text" name="q" /><button type="submit"><span class="fa fa-search"></span></button>
								</form>

								<div class="quote">
									<?=$PageQuote;?>
									<span class="author">George S. Patton</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END SHHOW THIS DURING RENOVATIONS -->

					<!-- HIDE THIS DURING RENOVATIONS
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
									<b>Tuesday - Friday</b><br />
									10:00am - 4:30pm EST<br />
									<b>Saturdays &amp; Federal Holidays</b><br />
								    10:00am - 5:30pm EST
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
					END HIDE THIS DURING RENOVATIONS -->
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

