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

						<div class="col-md-12 col-lg-6 col-lg-push-6">
							<div class="hours">
								<h6>MUSEUM HOURS</h6>
								<p>
									Tuesday through Friday: 10:00am - 4:30pm <br />
									Saturday: 10:00am - 5:30pm
								</p>
								<p>
									CLOSED: Sundays &amp; Mondays<br />
									Dec. 19 - Jan. 2, 2017
								</p>
								<p class="admission">
									Free Admission
								</p>								
							</div>
							<div class="panel">
								<a href="#" class="panel-title">
									EXHIBIT HIGHLIGHTS
								</a>
								<div class="img-wrapper">
									<a href="#">
										<img src="/_/img/home/helmet.jpg" class="img-fluid" />
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 col-lg-pull-6">
							<img src="/_/img/home/museum-flag.jpg" class="img-fluid" />

							<div id="Announcement">
								<h3>UPCOMING EVENTS</h3>
								<?php if (time() < mktime(0,0,0,11,11,2016)): ?>
									<p>
			                            <b><a href="/_/res/pdf/coin-giveaway.pdf">GEORGE S.  PATTON  COIN GIVEAWAY</a></b><br />
                                        November 7th - 10th
                                    </p>
                                <?php endif; ?>

								<?php if (time() < mktime(0,0,0,11,13,2016)): ?>
									<p>
										<b><a href="/_/res/pdf/art-of-war.pdf">MILITARY MODEL AND ART SHOW</a></b><br />
        	                            November 12th, 2016<br />                                    
            	                        10:00 AM - 4.30 PM
                                     </p>
                                <?php endif; ?>
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

