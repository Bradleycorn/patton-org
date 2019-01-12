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


		<!-- the museum is closing for renovations. We're going to
		remove the standard header for now, and put up a custom version
		with the closure info. When the museum reopens,
		re-enable the site-header.inc, and delete the custom header.
		Also, remove the <style> from the header of this page,
		and restore the main content area to it's normal state (see below) -->
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

					<div class="site-links">

						<?php
							$now = time();
						?>

							<div class="hours">
								<p>
									<b class="date-header">Regular Museum Hours:</b>
								</p>
								<p>	
									<b>Tuesday - Saturday</b><br />
									10:00am - 4:30pm EST
								</p>
								<p>	
									<b>Federal Holidays</b><br />
									Memorial Day, Independence Day, Labor Day and Veterans Day
								</p>

								<?php
									$maint_end = mktime(0,0,0,4,3,2019);
									if ($now < $maint_end) : 
								?>
									<p>	
									The museum will be closed from December 23rd, 2018 to April 2nd, 2019 to complete repairs and exhibit maintenance.
									</p>
								<?php endif; ?>

								<p><b class="date-header">Free Admission</b></p>

							</div>

				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

