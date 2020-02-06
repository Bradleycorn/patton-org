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
							<h4 class="section-title">Hours</h4>
						    <p>
								<b class="date-header">Regular Hours:</b><br />
							    <b>Tuesday - Saturday</b><br />
							    10:00am - 4:30pm EST<br />
								<b>Closed on All Federal Holidays</b>				
							</p>

							<p><b class="date-header">Closed:</b><br/>
								Sundays &amp; Mondays<br />
								Thanksgiving Day
								Christmas Day
					        </p>

							<?php
								$now = time();
								$maint_end = mktime(0,0,0,1,6,2020);
								if ($now < $maint_end) : 
							?>
								<p>	
                                The museum will be closed from December 23rd, 2019 to Jan 6th, 2020.
								</p>
							<?php endif; ?>

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

