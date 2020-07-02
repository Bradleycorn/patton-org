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
                                <p style="font-size: 1.5em;">
                                    <b>
                                        We are happy to announce that the
                                        the Patton Museum will re-open on July 7th,<br />
                                        operating with our Regular Musem Hours.
                                   </b>
                                </p>    
                                <p>
                                    <b>
                                    The following rules will be enforced:
                                    <ul style="text-align: left; margin: 0px auto 1em; max-width: 640px;">
                                        <li> All visitors will be required to wear a facemask while inside the museum.</li>
                                        <li> Visitors are asked to socially distance themselves from others whom they did not come with.</li>   
                                        <li>There will be hand sanitizing stations set up near theentrance for all visitors to use.</li>  
                                    </ul>    
                                    Please follow any instructions given bythe Soldiers on duty.  Thank you and we hope to see you soon!        
                                    </b>
                                </p>

								<p>
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

