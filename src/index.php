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

					<div class="site-links">

						<?php
							$now = time();
						?>

							<div class="hours">
                                <p>
                                    <b>
                                        Due to the COVID-19 outbreak and for the health and safety of visitors and staff,<br />
                                        the Patton Museum will regretfully close to visitors <br />
                                        beginning March 17, 2020 until further notice.<br />  
                                        We apologize for any inconvenience this causes.
                                    </b>
                                </p>    
<!--								<p>
									<b class="date-header">Regular Museum Hours:</b>
								</p>
								<p>	
									<b>Tuesday - Saturday</b><br />
									10:00am - 4:30pm EST
								</p>
								<p>	
                                    <b>Closed on All Federal Holidays</b>				
								</p>

								<?php
									$maint_end = mktime(0,0,0,1,6,2020);
									if ($now < $maint_end) : 
								?>
									<p>	
									The museum will be closed from December 23rd, 2019 to Jan 6th, 2020.
									</p>
								<?php endif; ?>

								<p><b class="date-header">Free Admission</b></p>
-->
							</div>

				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

